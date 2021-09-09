<?php

namespace App\Repositories\Interfaces;

use App\Models\Food;
use App\Models\User;

interface CartInterface
{
    public function getList(User $user);
    public function update(Food $food, int $action);
    public function delete(int $foodId);
}
