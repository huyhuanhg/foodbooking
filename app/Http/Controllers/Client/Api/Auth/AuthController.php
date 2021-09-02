<?php

namespace App\Http\Controllers\Client\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiUserLoginRequest;
use App\Http\Requests\Api\ApiUserRegisterRequest;
use App\Http\Requests\Api\EmailRequest;
use App\Services\AuthService;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->middleware('auth:api', ['except' => ['login', 'register', 'checkEmailExist']]);
    }

    /**
     * Show Form Login Admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login(ApiUserLoginRequest $request)
    {
        if (!$token = $this->authService->token($request->all())) {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
        return $this->createToken($token);
    }

    public function register(ApiUserRegisterRequest $request)
    {
        $response = $this->authService->register($request->all());
        return response()->json($response, $response["status"] ?? Response::HTTP_OK);
    }

    public function checkEmailExist(EmailRequest $request)
    {
        $response = $this->authService->checkEmailExist($request->email);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh()
    {
        return $this->createToken(auth()->refresh());
    }

    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    protected function createToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expire' => $this->authService->expriceToken(),
            'user' => auth()->user()
        ]);
    }
}
