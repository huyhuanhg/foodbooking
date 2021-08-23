<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Show Form Login Admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->route('dashboard');
        }
        return view('pages.admins.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            Cookie::queue('access_token', auth('admin-api')->attempt($credentials), 1000);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect()->route('manager.login');
    }
}
