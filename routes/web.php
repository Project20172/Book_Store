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
Route::get('/home', [
	'as'=>'home'
]);

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');


Route::get('/cart', [
	'as'=>'cart',
	'uses'=>'ViewPages@getCart'
]);

Route::get('add-to-cart/{id}', [
	'as' => 'book.addToCart',
	'uses' => 'ViewPages@getAddToCart'
]);

Route::get('/admin','WebManager@getAdmin')->name('getAdmin');