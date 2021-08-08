<?php


namespace App\Http\Controllers\Admin\Ajax;


use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index(){
        return view('pages.admins.categories.alert');
    }
}
