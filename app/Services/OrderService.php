<?php

namespace App\Services;

use App\Repositories\Interfaces\CartInterface;
use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\OrderInterface;

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
}
