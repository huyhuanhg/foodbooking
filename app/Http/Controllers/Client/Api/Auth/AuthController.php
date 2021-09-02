<?php

namespace App\Http\Controllers\Client\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiUserLoginRequest;
use App\Http\Requests\Api\ApiUserRegisterRequest;
use App\Http\Requests\Api\EmailRequest;
use App\Services\AuthService;

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
        return $this->authService->login($request->all());
    }

    public function register(ApiUserRegisterRequest $request)
    {
        return $this->authService->register($request->all());
    }

    public function checkEmailExist(EmailRequest $request)
    {
        return $this->authService->checkEmailExist($request->email);
    }

    public function logout()
    {
        return $this->authService->logout();
    }

    public function refresh()
    {
        return $this->authService->refresh();
    }

    public function userProfile()
    {
        return $this->authService->getUserProfile();
    }
}
