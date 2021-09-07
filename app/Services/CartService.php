<?php

namespace App\Services;

use App\Repositories\Interfaces\CartInterface;
use App\Repositories\Interfaces\PromotionInterface;
use App\Repositories\Interfaces\StoreInterface;
use Illuminate\Support\Facades\DB;

class CartService
{
    protected $cart, $store, $promotion;

    public function __construct(
        CartInterface      $cart,
        StoreInterface     $store,
        PromotionInterface $promotion
    )
    {
        $this->cart = $cart;
        $this->store = $store;
        $this->promotion = $promotion;
    }

    public function getList()
    {
        $carts = $this->cart->getList(auth()->user());
        $foodIds = $carts->pluck('id')->toArray();
        $promotions = $this->promotion->findByFoodId($foodIds);
        $this->addDiscount($carts, $promotions);
        $totalMoney = 0;
        $total = 0;
        foreach ($carts as $cart) {
            $money = $cart->discount ? $cart->discount['value'] : $cart->price;
            $totalMoney += $money * $cart->pivot->quantity;
            $total += $cart->pivot->quantity;
        }
        return [
            'cart_list' => $carts,
            'total_money' => $totalMoney,
            'total' => $total
        ];
    }

    protected function addDiscount($carts, $promotions)
    {
        foreach ($carts as $cart) {
            $promotion = $promotions->where('food_id', $cart->id)->first();
            if (!empty($promotion)) {
                $priceAfterDiscount = discount_calculate(
                    $cart->price,
                    $promotion->discount,
                    $promotion->max_discount,
                    $promotion->is_percent === 1
                );
                $cart->setAttribute('discount', [
                    'value' => $priceAfterDiscount,
                    'start_time' => $promotion->start_time,
                    'end_time' => $promotion->end_time,
                ]);
            }
        }
    }
}
