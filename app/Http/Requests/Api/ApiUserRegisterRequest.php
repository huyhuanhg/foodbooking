<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\UserRegisterRequest;

class ApiUserRegisterRequest extends UserRegisterRequest
{
    public $forceJsonResponse = true;
}
