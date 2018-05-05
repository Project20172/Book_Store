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
Route::get('/home', 'ViewPages@homepage')->name('home');

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

Route::get('loai-san-pham/{id}','ViewPages@getLoaiSanPham')->name('loaisanpham');

Route::get('/book_detail/{id}','WebManager@getBookDetail')->name('getBookDetail');

Route::get('admin/next3book/{id}','WebManager@getNext3Book')->name('getNext3Book');

Route::get('admin/nexttabvanhoc/{id}','WebManager@getNextTabVanHoc')->name('getNextTabVanHoc');

Route::get('admin/prevtabvanhoc/{id}','WebManager@getPrevTabVanHoc')->name('getPrevTabVanHoc');

Route::get('admin/prev3book/{id}','WebManager@getPrev3Book')->name('getPrev3Book');

