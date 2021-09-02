<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\UserLoginRequest;

class ApiUserLoginRequest extends UserLoginRequest
{
    public $forceJsonResponse = true;
}
