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
Route::group([
    'namespace' => '\App\Http\Controllers\Admin\Api',
], function () {
    Route::resource('category-api', 'CategoryController')->except(['show', 'edit', 'create']);
});

Route::namespace('App\Http\Controllers\Admin')->middleware('auth:admin-api')->group(function () {
    Route::post('/uploadFoodAvatar', 'FoodController@uploadFoodAvatar');
    Route::post('/deleteFoodAvatar', 'FoodController@deleteFoodAvatar');
});
