<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserAuthInterface;
use Illuminate\Support\Facades\DB;

class UserAuthRepository implements UserAuthInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register(array $dataRegister)
    {
        try {
            return $this->user->create($dataRegister);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function checkEmailExist(string $email)
    {
        return $this->user->select('email')->where('email', '=', $email)->count();
    }

    public function getTotalCart(User $user)
    {
        return $user->carts()
            ->select(DB::raw('SUM(quantity) `count`'))
            ->join('cart_detail', 'cart_detail.cart_id', 'carts.id')
            ->groupBy('cart_detail.cart_id')
            ->first();
    }
}
