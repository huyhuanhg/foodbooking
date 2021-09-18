<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'do_login']]);
    }

    /**
     * Show Form Login Admin
     * @param Request $request
     * @return Application|Factory|View
     */
    public function login()
    {
        return view('pages.clients.login');


    }

    public function do_login(UserLoginRequest $request)
    {
        dd($request->all());
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
