<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        echo '1234';
        dd(Auth::user());
//        echo 'Xin chào User, '. $user->person_id;
    }
}
