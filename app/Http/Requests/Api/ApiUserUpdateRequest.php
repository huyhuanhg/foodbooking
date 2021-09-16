<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\UserUpdateRequest;

class ApiUserUpdateRequest extends UserUpdateRequest
{
    public $forceJsonResponse = true;
}
