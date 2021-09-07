<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface CartInterface
{
    public function getList(User $user);
}
