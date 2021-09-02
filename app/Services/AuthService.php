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

    public function token($userInfo, $guard = null)
    {
        return auth($guard)->attempt($userInfo);
    }

    public function expriceToken($guard = null)
    {
        return auth($guard)->factory()->getTTL() * 60 + time();
    }


    public function register($dataRegister)
    {
        $user = $this->userAuthInterface->register([
            'email' => $dataRegister['email'],
            'password' => bcrypt($dataRegister['password']),
            'first_name' => $dataRegister['first_name'],
            'last_name' => $dataRegister['last_name'],
            'phone' => $dataRegister['phone'],
            'gender' => $dataRegister['gender'],
        ]);
        if (!$user) {
            return [
                'message' => "Đăng ký thất bại!",
                'status' => Response::HTTP_FOUND
            ];
        }
        return [
            'message' => 'Đăng ký thành công!',
            'data' => $user
        ];
    }

    public function checkEmailExist($email)
    {
        if ($this->userAuthInterface->checkEmailExist($email) === 0) {
            return ['message' => 'Email chưa được đăng ký!'];
        } else {
            return ['message' => 'Email đã tồn tại!', 'status' => Response::HTTP_FORBIDDEN];
        }
    }

}
