<?php

namespace App\Repositories\Interfaces;

interface UserAuthInterface
{
    public function register(array  $dataRegister);
    public function checkEmailExist(string $email);
}
