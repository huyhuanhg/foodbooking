<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\DeleteImagesRequest;

class ApiDeleteImagesRequest extends DeleteImagesRequest
{
    public $forceJsonResponse = true;
}
