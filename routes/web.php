<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'PagesController@shop')->name('shop.index');
Route::get('/cart', 'PagesController@cart')->name('cart.index');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');

Route::post('/cart/add', 'PagesController@add_to_cart')->name('cart.store');
