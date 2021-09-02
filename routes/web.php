<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('App\Http\Controllers\Client\Auth')->group(function () {
});
Route::get('/login', 'App\Http\Controllers\Client\Auth\LoginController@login')->name('login');
Route::post('/do-login', 'App\Http\Controllers\Client\Auth\LoginController@do_login')->name('client-login');

Route::namespace('App\Http\Controllers\Client')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

//Route::middleware('guest')->namespace('App\Http\Controllers\Admin')->group(function (){
//    Route::get('/admin/login', 'UserController@getLogin')->name('login');
//    Route::post('/admin/login', 'UserController@postLogin');
//});
//Route::match(['get', 'post'], '/admin/login', 'App\Http\Controllers\Admin\AuthController@login')->name('login');

//Route::get('/', function () {
//    return view('pages.clients.homes.index');
//});
//Route::get('/login', 'UserController@getLogin');
//Route::post('/', 'UserController@postLogin');
//Route::namespace('App\Http\Controllers\Admin')->middleware('guest')->group(function (){
//});
//Route::middleware('auth')->group(function (){
//    Route::get('/test', function (){
//        return "abc";
//    });
//});
