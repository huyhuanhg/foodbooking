<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\LikeRequest;

class ApiLikeRequest extends LikeRequest
{
    public $forceJsonResponse = true;
}
