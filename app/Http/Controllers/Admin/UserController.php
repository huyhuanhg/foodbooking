<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }

    public function getLogin()
    {
        return view('pages.admins.login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::guard('users')->attempt($arr)) {

            dd('đăng nhập thành công');
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }

    public function customer(Request $request)
    {
        $currentPage = $request->page ? (int)$request->page : 1;
        $data['customersPaginate'] = $this->objUser->getAllCustomers($currentPage);
        return view('pages.admins.customers.index', $data);
    }

    public function show(Request $request)
    {
        if (!$request->id || preg_match("/[a-zA-Z]/", $request->id)) {
            return redirect()->route('customers');
        }
        $data['customerInfo'] = $this->objUser->getCustomerById($request->id);
        return view('pages.admins.customers.detail', $data);
    }
}
