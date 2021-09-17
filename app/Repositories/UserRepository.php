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

    public function changeAvatar(string $path)
    {
        $user = $this->user->find(auth()->user()->id);
        $currentPathAvatar = $user->avatar;
        $user->avatar = $path;
        $user->save();
        return $currentPathAvatar;
    }

    public function updateUserInfo(array $updateData)
    {
        $user = auth()->user();
        foreach ($updateData as $key => $value) {
            if ($key === 'password') {
                $user->$key = bcrypt($value);
            } else {
                $user->$key = $value;
            }
        }
        $user->save();
        return $user;
    }
}
