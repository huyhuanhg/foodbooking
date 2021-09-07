<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserAuthInterface
{
    public function register(array  $dataRegister);
    public function checkEmailExist(string $email);
    public function getTotalCart(User $user);
}
