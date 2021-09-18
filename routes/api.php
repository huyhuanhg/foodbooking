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


Route::group([
    'middleware' => 'api',
    'prefix' => 'v1',
    'namespace' => 'App\Http\Controllers\Client\Api',
], function () {

    Route::get('/foods', 'FoodController@index');
    Route::get('/stores', 'StoreController@index');
    Route::get('/stores/{store}', 'StoreController@show');
    Route::get('/stores/{store}/pictures', 'StoreController@showPictures');
    Route::get('/food-promotions', 'FoodController@promotions');

    Route::get('/listed', 'OtherController@getDataSectionListed');

    Route::get('/address', 'OtherController@address');
    Route::get('/districts', 'OtherController@districts');
    Route::get('/wards', 'OtherController@wards');

    Route::get('/comment', 'CommentController@index');
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'v1',
    'namespace' => 'App\Http\Controllers\Client\Api',
], function () {
    Route::patch('/user', 'UserController@update');
    Route::patch('/user-email', 'UserController@updateEmail');
    Route::patch('/user-phone', 'UserController@updatePhone');
    Route::patch('/user-full-name', 'UserController@updateFullName');
    Route::patch('/user-change-password', 'UserController@changePassword');

    Route::get('/carts', 'CartController@index');
    Route::post('/carts', 'CartController@update');
    Route::delete('/carts', 'CartController@destroy');

    Route::get('/order', 'OrderController@index');
    Route::post('/order', 'OrderController@store');

    Route::post('/rate', 'RateController@store');
    Route::get('/rate', 'RateController@index');

    Route::get('/like', 'LikeController@index');
    Route::post('/like', 'LikeController@update');

    Route::post('/comment', 'CommentController@store');

    Route::resource('/bookmark', 'BookmarkController')->except(['edit', 'create', 'update']);
    Route::patch('/bookmark', 'BookmarkController@update');

    Route::post('/user-avatar', 'UserController@uploadAvatar');
    Route::post('/comment-pictures', 'CommentController@uploadPicture');
    Route::post('/comment-pictures-d', 'CommentController@deletePictures');
    Route::post('/comment-picture-d', 'CommentController@deletePicture');
});
