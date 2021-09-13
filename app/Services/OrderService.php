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

    public function getList($request, $userId = 0, $limit = 5)
    {
        $storeId = $request->store_id ?? 0;
        $orders = $this->orderInterface->getList(
            $userId,
            $request->page ?? 1,
            $storeId,
            $limit
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
                    $foodInfo =
                        [
                            'food_name' => $detailItem->food_name,
                            'food_avatar' => $detailItem->food_avatar,
                            'food_id' => $detailItem->food_id,
                            'quantity' => $detailItem->pivot->quantity,
                            'price' => $detailItem->pivot->uni_price,
                            'discount' => $detailItem->pivot->discount,
                        ];
                    $storeInfo = collect([
                        'store_id' => $detailItem->store_id,
                        'store_name' => $detailItem->store_name,
                        'store_avatar' => $detailItem->store_avatar,
                        'store_not_mark' => $detailItem->store_not_mark,
                        'store_address' => $detailItem->store_address,
                    ]);
                    if (empty($orderDetails[$detailKey])) {
                        $orderDetails[$detailKey] = [
                            'order_id' => $detailItem->pivot->order_id,
                            'detail' => [[
                                'store_id' => $detailItem->store_id,
                                'store_name' => $detailItem->store_name,
                                'store_avatar' => $detailItem->store_avatar,
                                'store_not_mark' => $detailItem->store_not_mark,
                                'store_address' => $detailItem->store_address,
                                'foods' => [$foodInfo]
                            ]]
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
                            array_push($orderDetails[$detailKey]['detail'], $storeInfo->merge(['foods' => [$foodInfo]]));
                        } else {
                            array_push($orderDetails[$detailKey]['detail'][$index]['foods'], $foodInfo);
                        }
                    }

                }
            }
        }
        return $orderDetails;
    }
    protected function syncDetail($orders, $orderDetails){
        foreach ($orders as $order) {
            $orderId = $order->id;
            $orderDetail = array_filter($orderDetails , function ($orderDetail) use ($orderId) {
                return $orderDetail['order_id'] === $orderId;
            });
            $orderDetail = collect(...$orderDetail);
            $order->setAttribute('detail', $orderDetail['detail']);
        }
    }
}
