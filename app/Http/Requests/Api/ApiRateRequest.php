<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\RateRequest;

class ApiRateRequest extends RateRequest
{
    public $forceJsonResponse = true;
}
