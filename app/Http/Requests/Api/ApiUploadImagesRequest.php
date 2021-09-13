<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\UploadImagesRequest;

class ApiUploadImagesRequest extends UploadImagesRequest
{
    public $forceJsonResponse = true;
}
