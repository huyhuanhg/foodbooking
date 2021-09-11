<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderInterface;
use Exception;

class OrderRepository implements OrderInterface
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->$order = $order;
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
