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

Route::get('/', 'App\Http\Controllers\BannersController@getBanner');
Route::get('/product/{id}', 'App\Http\Controllers\ProductsController@getProduct');
Route::get('/shop/{search}/{sort}', 'App\Http\Controllers\ProductsController@getProducts');

Route::get('/contact', function () {
    return View::make('pages.contact');
});

Route::get('/about', function () {
    return View::make('pages.about');
});

Route::get('/cart', function () {
    return View::make('pages.cart');
});

Route::get('/account', function () {
    return View::make('pages.account');
});

Route::get('/checkout', function () {
    return View::make('pages.checkout');
});
