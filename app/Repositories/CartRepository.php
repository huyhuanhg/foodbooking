<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\User;
use App\Repositories\Interfaces\CartInterface;

class CartRepository implements CartInterface
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getList(User $user)
    {
        $cartUser = $this->cart->where('user_id', $user->id)->first();
        return $cartUser->foods()->get();
    }

}
