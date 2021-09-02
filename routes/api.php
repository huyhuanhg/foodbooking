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
    'namespace' => 'App\Http\Controllers\Client\Api\Auth',
], function () {
    //auth user
    Route::post('/login', 'AuthController@login');
    Route::post('/email-exist', 'AuthController@checkEmailExist');
    Route::post('/register', 'AuthController@register');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::get('/user-profile', 'AuthController@userProfile');


});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/manager',
    'namespace' => '\App\Http\Controllers\Admin\Api\Auth',
], function () {
    //auth admin
//    Route::post('/login', 'AuthController@login');
//    Route::post('/logout', 'AuthController@logout');
//    Route::post('/refresh', 'AuthController@refresh');
//    Route::get('/user-profile', 'AuthController@userProfile');
});
