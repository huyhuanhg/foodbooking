<?php

namespace App\Http\Controllers\Client\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'checkEmailExist']]);
    }

    /**
     * Show Form Login Admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ],
            [
                'email.required' => 'Vui lòng nhập email!',
                'password.required' => 'Vui lòng nhập mật khẩu!',
                'email.email' => 'Định dạng email không đúng!',
                'password.string' => 'Định dạng mật khẩu không đúng!',
                'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        return $this->createNewToken($token);
    }

    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() + time(),
            'user' => auth()->user()
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'first_name' => ['required', "regex:/^[\w'\-,.][^0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/"],
            'last_name' => ['required', "regex:/^[\w'\-,.][^0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/"],
            'phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'gender' => ['required', 'regex:/^[0|1]$/'],
        ], [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Định dạng email không đúng!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.string' => 'Định dạng mật khẩu không đúng!',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            'first_name.required' => 'Vui lòng nhập họ tên!',
            'first_name.regex' => 'Họ tên không hợp lệ!',
            'last_name.required' => 'Vui lòng nhập họ tên!',
            'last_name.regex' => 'Họ tên không hợp lệ!',
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'phone.regex' => 'Định dạng không đúng (0xxxx / +84xxxxx)',
            'gender.required' => 'Vui lòng chọn giới tính!',
            'gender.regex' => 'Giới tính không hợp lệ!',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'gender' => $request->gender,
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

    public function checkEmailExist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'regex:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']
        ], [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Định dạng email không đúng!'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $count = User::select('email')->where('email', '=', $request->email)->count();
        if ($count === 0) {
            return response()->json(['message' => 'Email chưa tồn tại!']);
        } else {
            return response()->json(['message' => 'Email đã tồn tại!'], Response::HTTP_FORBIDDEN);
        }
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

    public function userProfile()
    {
        return response()->json(auth()->user());
    }
}
