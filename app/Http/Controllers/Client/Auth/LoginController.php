<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    private $userObj;

    public function __construct()
    {
        $this->userObj = new User();
    }

    /**
     * Show Form Login Admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('pages.clients.login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
