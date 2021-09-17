<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\BookmarkRequest;

class ApiBookmarkRequest extends BookmarkRequest
{
    public $forceJsonResponse = true;
}
