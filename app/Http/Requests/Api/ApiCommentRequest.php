<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\CommentRequest;

class ApiCommentRequest extends CommentRequest
{
    public $forceJsonResponse = true;
}
