<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show Form Login Admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if (Auth::guard('admin')->user()){
                return redirect()->route('dashboard');
            }
            return view('pages.admins.login');
        }
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }
//    public function login(Request $request)
//    {
//        if ($request->getMethod() == 'GET') {
//            return view('pages.admins.login');
//        }
//
//        $loginData = $request->only(['account', 'password']);
//        if (Auth::attempt($loginData)) {
////            return redirect()->route('home');
//            dd(Auth::user()->decentralization);
//        } else {
////            return redirect()->back()->withInput();
//            dd(false);
//        }
//    }
}
