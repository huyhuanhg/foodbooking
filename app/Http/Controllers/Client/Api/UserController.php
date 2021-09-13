<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiUploadImageRequest;
use App\Services\UserService;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function uploadAvatar(ApiUploadImageRequest $request)
    {
        $response = $this->userService->changeAvatar($request->image);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
