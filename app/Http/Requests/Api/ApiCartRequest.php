<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\CartRequest;

class ApiCartRequest extends CartRequest
{
    public $forceJsonResponse = true;
}
