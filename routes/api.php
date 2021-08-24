<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1',
    'namespace' => '\App\Http\Controllers\Client\Api\Auth',
], function () {
    //auth user
    Route::post('/login', 'LoginController@login');
    Route::post('/email-exist', 'LoginController@checkEmailExist');
    Route::post('/register', 'LoginController@register');
    Route::post('/logout', 'LoginController@logout');
    Route::post('/refresh', 'LoginController@refresh');
    Route::get('/user-profile', 'LoginController@userProfile');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/manager',
    'namespace' => '\App\Http\Controllers\Admin\Api\Auth',
], function () {
    //auth admin
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout');
    Route::post('/refresh', 'LoginController@refresh');
    Route::get('/user-profile', 'LoginController@userProfile');
});
