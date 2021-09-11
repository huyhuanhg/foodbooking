<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiCommentRequest;
use App\Services\CommentService;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{

    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(ApiCommentRequest $request)
    {
//        $response = $this->rateService->create($request);
//        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
