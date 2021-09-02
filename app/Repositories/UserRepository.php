<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getTotalCount()
    {
        return $this->user->select(DB::raw('COUNT(id) AS total_users'))->first();
    }
}
