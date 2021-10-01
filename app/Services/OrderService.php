<?php

namespace App\Services;

use App\Repositories\Interfaces\CartInterface;
use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\OrderInterface;
use Symfony\Component\HttpFoundation\Response;

class OrderService
{
    protected $foodInterface;
    protected $orderInterface;
    protected $cartInterface;

    public function __construct(
        OrderInterface $orderInterface,
        CartInterface  $cartInterface,
        FoodInterface  $foodInterface
    )
    {
        $this->orderInterface = $orderInterface;
        $this->cartInterface = $cartInterface;
        $this->foodInterface = $foodInterface;
    }

    public function getList($request, $userId = 0)
    {
        $storeId = $request->store_id ?? 0;
        $orders = $this->orderInterface->getList(
            $request->timezone ?? 'UTC',
            $userId,
            $request->page ?? 1,
            $storeId,
            $request->limit ?? 10
        );
        if (!$orders) {
            return [
                'status' => Response::HTTP_LOCKED
            ];
        }
        $orderIds = [];
        foreach ($orders as $order) {
            array_push($orderIds, $order->id);
        }
        $details = $this->orderInterface->getOrderDetail($orderIds, $storeId);
        $orderDetail = $this->formatDetail($details, $storeId);
        $this->syncDetail($orders, $orderDetail);
        return $orders;
    }

    public function create($requset)
    {
        $orderId = $this->orderInterface->create(
            $requset->full_name,
            $requset->phone,
            $requset->address,
            $requset->note ?? ''
        );
        $cartList = $this->cartInterface->getList();
        $foodIds = $cartList->map(function ($cart) {
            return $cart->id;
        })->toArray();
        $cartInfo = $cartList->map(function ($cart) {
            return [
                'store_id' => $cart->store_id,
                'uni_price' => $cart->price,
                'discount' => $cart->discount,
                'quantity' => $cart->pivot->quantity
            ];
        })->toArray();

        $orderDetail = $this->orderInterface->addDetail($orderId, $foodIds, $cartInfo);
        $this->foodInterface->updateConsume($foodIds, $cartInfo);
        $this->cartInterface->delete(-1);
        return $orderDetail;
    }

    protected function formatDetail($details, $storeId)
    {
        $orderDetails = [];
        if ($storeId === 0) {
            foreach ($details as $detailKey => $detail) {
                foreach ($detail as $detailItem) {
                    $foodInfo = collect([
                        'total_money' => $detailItem->total_money,
                        'food_name' => $detailItem->food_name,
                        'food_image' => $detailItem->food_image,
                        'food_id' => $detailItem->food_id,
                        'quantity' => $detailItem->pivot->quantity,
                        'price' => $detailItem->pivot->uni_price,
                        'discount' => $detailItem->pivot->discount,
                    ]);
                    $storeInfo = [
                        'store_id' => $detailItem->store_id,
                        'total_money' => $detailItem->total_money,
                        'store_name' => $detailItem->store_name,
                        'store_image' => $detailItem->store_image,
                        'store_not_mark' => $detailItem->store_not_mark,
                        'store_address' => $detailItem->store_address,
                    ];
                    if (empty($orderDetails[$detailKey])) {
                        $newDetail = [];
                        $storeInfo['foods'] = [$foodInfo];
                        array_push($newDetail, $storeInfo);
                        $orderDetails[$detailKey] = [
                            'order_id' => $detailItem->pivot->order_id,
                            'total_money' => $detailItem->total_money,
                            'detail' => $newDetail
                        ];
                    } else {
                        $storeId = $detailItem->store_id;
                        $index = -1;
                        foreach ($orderDetails[$detailKey]['detail'] as $key => $value) {
                            if ($value['store_id'] === $storeId) {
                                $index = $key;
                                break;
                            }
                        }
                        if ($index === -1) {
                            $orderDetails[$detailKey]['total_money'] += $detailItem->total_money;
                            $storeInfo['foods'] = [$foodInfo];
                            array_push($orderDetails[$detailKey]['detail'], $storeInfo);
                        } else {
                            $orderDetails[$detailKey]['total_money'] += $detailItem->total_money;
                            $orderDetails[$detailKey]['detail'][$index]['total_money'] += $detailItem->total_money;
                            array_push($orderDetails[$detailKey]['detail'][$index]['foods'], $foodInfo);
                        }
                    }

                }
            }
        }
        return $orderDetails;
    }

    protected function syncDetail($orders, $orderDetails)
    {
        foreach ($orders as $order) {
            $orderId = $order->id;
            $orderDetail = array_filter($orderDetails, function ($orderDetail) use ($orderId) {
                return $orderDetail['order_id'] === $orderId;
            });
            $orderDetail = collect(...$orderDetail);
            $order->setAttribute('total_money', $orderDetail['total_money']);
            $order->setAttribute('detail', $orderDetail['detail']);
        }
    }
}
