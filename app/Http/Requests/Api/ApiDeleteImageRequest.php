<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\DeleteImageRequest;

class ApiDeleteImageRequest extends DeleteImageRequest
{
    public $forceJsonResponse = true;
}
