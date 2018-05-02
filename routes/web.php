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
    return view('pages.home');
});

Route::get('/admin','WebManager@getAdmin')->name('getAdmin');

Route::get('/admin/add-category','WebManager@getAddCategory')->name('getAddCategory');

Route::post('/admin/add-category','WebManager@postAddCategory')->name('postAddCategory');

Route::get('/admin/add-book','WebManager@getAddBook')->name('getAddBook');

Route::get('/admin/list-book','WebManager@getListBook')->name('getListBook');

Route::get('/admin/edit-category/{id}','WebManager@getEditCategory')->name('getEditCategory');

Route::post('/admin/edit-category','WebManager@postEditCategory')->name('postEditCategory');

Route::get('/admin/list-category','WebManager@getListCategory')->name('getListCategory');

Route::get('admin/list-author','WebManager@getListAuthor')->name('getListAuthor');

Route::get('admin/add-author','WebManager@getAddAuthor')->name('getAddAuthor');

Route::post('admin/add-author','WebManager@postAddAuthor')->name('postAddAuthor');

Route::get('admin/edit-author/{id}','WebManager@getEditAuthor')->name('getEditAuthor');

Route::post('admin/edit-author','WebManager@postEditAuthor')->name('postEditAuthor');

Route::get('/result-search', function () {
    return view('pages.result_search');
})->name('result-search');

Route::get('loai-san-pham/{id}','ViewPages@getLoaiSanPham')->name('loaisanpham');

Route::get('/cart', function () {
    return view('pages.carts');
})->name('cart');

Route::get('/home', 'ViewPages@homepage')->name('home');

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('book_detail', function () {
    return view('pages.book_detail');
})->name('book_detail');
