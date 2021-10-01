<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class OrderRepository implements OrderInterface
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getList(string $timezone, int $userId, int $page, int $store, int $limit)
    {
        date_default_timezone_set($timezone);
        if ($userId === 0 && $store === 0) {
            return;
        }
        $orders = $this->order;
        if ($userId > 0) {
            $orders = $orders->where('customer_id', $userId);
        } elseif ($store > 0) {
            $orders = $orders->leftJoin('order_detail', 'orders.id', 'order_detail.order_id')
                ->where('order_detail.store_id', $store)
                ->groupBy('orders.id');
        }
        return $orders->orderBy('order_status', 'ASC')->orderBy('orders.created_at', 'DESC')->
        paginate(
            $limit,
            [
                'id',
                'customer_id',
                'order_name',
                'order_phone',
                'order_address',
                'order_note',
                'order_status',
                'created_at'
            ],
            'Danh sách đơn hàng',
            $page,
        );
    }

    public function getOrderDetail(array $orderIds, int $storeId)
    {
        $select = [
            'foods.food_name',
            'foods.food_image',
            DB::raw('foods.id food_id')
        ];
        if ($storeId === 0) {
            $select = array_merge($select, [
                DB::raw('stores.id store_id'),
                DB::raw('(order_detail.discount * quantity) AS total_money'),
                'stores.store_name',
                'stores.store_image',
                'stores.store_not_mark',
                'stores.store_address'
            ]);
        }
        $orderDetails = [];
        foreach ($orderIds as $orderId) {
            $detail = $this->order->find($orderId)
                ->orderDetail()
                ->select($select)
                ->withPivot('quantity', 'uni_price', 'discount')
                ->join('stores', 'stores.id', 'order_detail.store_id');
            if ($storeId !== 0) {
                $detail = $detail->where('stores.id', $storeId);
            }
            array_push($orderDetails, $detail->get());
        }
        return $orderDetails;
    }

    public function create(string $fullName, string $numberPhone, string $address, string $note)
    {
        try {
            $order = new Order();
            $order->customer_id = auth()->user()->id;
            $order->order_name = $fullName;
            $order->order_phone = $numberPhone;
            $order->order_address = $address;
            if ($note) {
                $order->order_note = $note;
            }
            $order->save();
            return $order->id;
        } catch (Exception $e) {
            return [
                'status' => 403,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function addDetail(int $orderId, array $foodIds, array $cartInfo)
    {
        $order = Order::find($orderId);
        foreach ($foodIds as $foodKey => $foodId) {
            $order->orderDetail()->attach($foodId, $cartInfo[$foodKey]);
        }
        return $order;
    }
}
