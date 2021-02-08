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
Route::get('/index', 'App\Http\Controllers\BannersController@getBanner');

Route::get('/product/{id}', 'App\Http\Controllers\ProductsController@getProduct');
Route::get('/addreview/{id}', 'App\Http\Controllers\ProductsController@addReview');
Route::get('/shop/{sort}', 'App\Http\Controllers\ProductsController@getProducts');

Route::get('/login', 'App\Http\Controllers\UsersController@login');
Route::get('/register', 'App\Http\Controllers\UsersController@register');
Route::get('/logout', 'App\Http\Controllers\UsersController@logout');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');
Route::get('/place', 'App\Http\Controllers\CheckoutController@place');

Route::get('/addtocart/{id}', 'App\Http\Controllers\CartsController@addToCart');
Route::get('/removefromcart/{id}', 'App\Http\Controllers\CartsController@removeFromCart');
Route::get('/updatecart/{id}/{quantity}', 'App\Http\Controllers\CartsController@updateCart');
Route::get('/cart', 'App\Http\Controllers\CartsController@index');

Route::get('/suscribe', 'App\Http\Controllers\SuscribeController@suscribe');

Route::get('/contactrequest', 'App\Http\Controllers\ContactController@contact');

Route::get('/contact', function () {
    return View::make('pages.contact');
});

Route::get('/about', function () {
    return View::make('pages.about');
});

Route::get('/account', function () {
    return View::make('pages.account');
});
