<?php

namespace App\Services;


use App\Repositories\Interfaces\UserAuthInterface;
use Symfony\Component\HttpFoundation\Response;

class AuthService
{
    protected $userAuthInterface;

    public function __construct(UserAuthInterface $userAuthInterface)
    {
        $this->userAuthInterface = $userAuthInterface;
    }

    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60 + time(),
            'user' => auth()->user()
        ]);
    }

    public function login($dataLogin)
    {
        if (!$token = auth()->attempt($dataLogin)) {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
        return $this->createNewToken($token);
    }

    public function register($dataRegister)
    {
        try {
            $user = $this->userAuthInterface->register([
                'email' => $dataRegister['email'],
                'password' => bcrypt($dataRegister['password']),
                'first_name' => $dataRegister['first_name'],
                'last_name' => $dataRegister['last_name'],
                'phone' => $dataRegister['phone'],
                'gender' => $dataRegister['gender'],
            ]);
            return response()->json([
                'message' => 'Đăng ký thành công!',
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Đăng ký thất bại!",
                'error' => $e->getMessage(),
            ], Response::HTTP_FOUND);
        }
    }

    public function checkEmailExist($email)
    {
        if ($this->userAuthInterface->checkEmailExist($email) === 0) {
            return response()->json(['message' => 'Email chưa được đăng ký!']);
        } else {
            return response()->json(['message' => 'Email đã tồn tại!'], Response::HTTP_FORBIDDEN);
        }
    }

    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }
    public function getUserProfile()
    {
        return response()->json(auth()->user());
    }
}
