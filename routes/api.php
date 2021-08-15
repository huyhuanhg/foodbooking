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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function () {
    Route::post('/login', [\App\Http\Controllers\Client\Auth\LoginController::class, 'login']);
    Route::post('/logout', [\App\Http\Controllers\Client\Auth\LoginController::class, 'logout']);
    Route::post('/refresh', [\App\Http\Controllers\Client\Auth\LoginController::class, 'refresh']);
    Route::get('/user-profile', [\App\Http\Controllers\Client\Auth\LoginController::class, 'userProfile']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/manager',
    'namespace' => '\App\Http\Controllers\Admin\Api\Auth',
], function () {
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout');
    Route::post('/refresh', 'LoginController@refresh');
    Route::get('/user-profile', 'LoginController@userProfile');
});
