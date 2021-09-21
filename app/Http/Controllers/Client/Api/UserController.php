<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiUploadImageRequest;
use App\Http\Requests\Api\ApiUserUpdateRequest;
use App\Http\Requests\Api\EmailRequest;
use App\Http\Requests\Api\FullNameRequest;
use App\Http\Requests\Api\PasswordRequest;
use App\Http\Requests\Api\PhoneRequest;
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

    public function updateFullName(FullNameRequest $request)
    {
        $response = $this->userService->updateUserInfo($request->only(['first_name', 'last_name']));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function updatePhone(PhoneRequest $request)
    {
        $response = $this->userService->updateUserInfo($request->only(['phone']));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function updateEmail(EmailRequest $request)
    {
        $response = $this->userService->updateUserInfo($request->only(['email']));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function update(ApiUserUpdateRequest $request)
    {
        $response = $this->userService->updateUserInfo(
            $request->only([
                'first_name',
                'last_name',
                'gender',
                'email',
                'phone',
                'address',
                'province_code',
                'district_code',
                'ward_code',
                'birthday',
                'description'
            ])
        );
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function changePassword(PasswordRequest $request)
    {
        $response = $this->userService->updateUserInfo($request->only(['password']));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
