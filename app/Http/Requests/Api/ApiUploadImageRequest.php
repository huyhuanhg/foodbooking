<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\UploadImageRequest;

class ApiUploadImageRequest extends UploadImageRequest
{
    public $forceJsonResponse = true;
}
