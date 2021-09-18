<?php

namespace App\Repositories\Interfaces;

interface UserInterface
{
    public function getTotalCount();

    public function changeAvatar(string $path);

    public function updateUserInfo(array $updateData);
}
