<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiLikeRequest;
use App\Services\LikeService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{

    protected $likeService;

    public function __construct(LikeService $likeService)
    {
        $this->likeService = $likeService;
    }

    public function index(Request $request)
    {
        $response = $this->likeService->checkLikeList($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function update(ApiLikeRequest $request)
    {
        $response = $this->likeService->toggle($request->food_id);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
