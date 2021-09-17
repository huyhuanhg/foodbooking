<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Food;
use App\Repositories\Interfaces\CartInterface;
use Symfony\Component\HttpFoundation\Response;

class CartRepository implements CartInterface
{
    protected $cart;
    protected $food;

    public function __construct(Cart $cart, Food $food)
    {
        $this->cart = $cart;
        $this->food = $food;
    }

    public function getList()
    {
        $cartUser = $this->cart->where('user_id', auth()->user()->id)->first();
        return $cartUser->foods()->withPivot('quantity', 'store_id')->get();
    }

    public function update(Food $food, int $action)
    {
        try {
            $cart = $this->cart->where('user_id', auth()->user()->id)->first();
            if (empty($cart)) {
                $cart = new Cart();
                $cart->user_id = auth()->user()->id;
                $cart->save();
            }
            $cartDetail = $cart->foods()->where('food_id', $food->id)->withPivot('quantity', 'store_id')->get();
            if (empty($cartDetail->pluck('pivot')->toArray())) {
                $cart->cartDetail()->attach($food->id, ['store_id' => $food->store_id, 'quantity' => $action]);
                $createInfo = $food->only('id', 'food_name', 'food_avatar');
                $createInfo['pivot'] = collect(['quantity' => 0]);
                return $createInfo;
            } else {
                $quantity = $cartDetail->pluck('pivot')->first()->quantity + $action;
                $cart->cartDetail()->detach($food->id);
                $cart->cartDetail()->attach($food->id, ['store_id' => $food->store_id, 'quantity' => $quantity]);
                return $cartDetail->first()->only('id', 'food_name', 'food_avatar', 'pivot');
            }
        } catch (\Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ];
        }
    }

    public function delete(int $foodId)
    {
        $cart = $this->cart->where('user_id', auth()->user()->id)->first();
        if (!empty($cart)) {
            try {
                if ($foodId !== -1) {
                    $cart->cartDetail()->detach($foodId);
                } else {
                    $cart->cartDetail()->detach($cart->foods()->get()->pluck('id')->toArray());
                }
            } catch (\Exception $e) {
                return [
                    'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => $e->getMessage()
                ];
            }
        }
    }
}
