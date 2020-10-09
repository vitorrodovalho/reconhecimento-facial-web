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

Route::group(['middleware' => ['guest', 'throttle:10,5']], function () {
    Route::get('/products', '\App\Http\Controllers\ProductsController@index_ws');
    Route::get('/products/{product}', '\App\Http\Controllers\ProductsController@show_ws');
    Route::post('/products', '\App\Http\Controllers\ProductsController@store_ws');
});

