<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\OrderRequest;

class ApiOrderRequest extends OrderRequest
{
    public $forceJsonResponse = true;
}
