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

Route::get('admin-login','WebManager@getAdminLogin')->name('getAdminLogin');

Route::post('admin-login','WebManager@postAdminLogin')->name('postAdminLogin');

Route::get('check-username/{id}','WebManager@getCheckUserName')->name('getCheckUserName');

Route::post('send_review','WebManager@postSendReview')->name('postSendReview');

Route::get('getCategoryAndCount', 'WebManager@getCategoryAndCount')->name('getCategoryAndCount');

Route::get('getBookByAuthor/{id}','WebManager@getBookByAuthor')->name('getBookByAuthor');

Route::get('/home', 'ViewPages@homepage')->name('home');

Route::get('/', 'ViewPages@homepage')->name('home');

Route::post('check-login','WebManager@postCheckLogin')->name('postCheckLogin');

Route::post('search','WebManager@postSearchBook')->name('postSearchBook');
Route::post('search-book','WebManager@postSearchBook_1')->name('postSearchBook_1');

Route::get('login', 'WebManager@getLogin')->name('getLogin');

Route::get('logout', 'WebManager@getLogout')->name('getLogout');

Route::get('/register', function () {
	return view('pages.register');
})->name('register');

Route::get('/user_information',function(){
	return view('pages.user_information');
})->name('user_information');

Route::post('/home','RegisterController@addCustomer')->name('addCustomer');

Route::get('/result-search', 'ViewPages@getResultSearch')->name('result-search');
// ============================ Cart ===================
Route::get('/cart', ['as'=>'cart','uses'=>'ViewPages@getCart']);

Route::get('add-to-cart/{id}', [
	'as' => 'book.addToCart',
	'uses' => 'ViewPages@getAddToCart'
]);

Route::get('remove-all-cart', [
	'as'=>'removeAllCart',
	'uses'=>'ViewPages@removeAllCart'
]);

Route::get('updateCart', [
	'as'=>'updateCart',
	'uses'=>'ViewPages@updateCart'
]);


// ===================== end cart======================

Route::get('/book_detail/{id}','WebManager@getBookDetail')->name('getBookDetail');

Route::get('/home', 'ViewPages@homepage')->name('home');


Route::get('/admin','WebManager@getAdmin')->name('getAdmin');

Route::get('/admin/list-customer','WebManager@getListCustomer')->name('getListCustomer');

Route::get('/admin/list-admin','WebManager@getListAdmin')->name('getListAdmin');

Route::post('/admin/add-customer','WebManager@postAddCustomer')->name('postAddCustomer');

Route::post('/admin/add-admin','WebManager@postAddAdmin')->name('postAddAdmin');

Route::get('/admin/add-customer','WebManager@getAddCustomer')->name('getAddCustomer');

Route::get('/admin/add-admin','WebManager@getAddAdmin')->name('getAddAdmin');

Route::get('/admin/list-category','WebManager@getListCategory')->name('getListCategory');

Route::get('/admin/add-category','WebManager@getAddCategory')->name('getAddCategory');

Route::get('admin/list-author','WebManager@getListAuthor')->name('getListAuthor');

Route::get('admin/add-author','WebManager@getAddAuthor')->name('getAddAuthor');

Route::get('/admin/list-book','WebManager@getListBook')->name('getListBook');

Route::get('/admin/add-book','WebManager@getAddBook')->name('getAddBook');

Route::get('/admin/edit-category/{id}','WebManager@getEditCategory')->name('getEditCategory');

Route::post('/admin/add-category','WebManager@postAddCategory')->name('postAddCategory');

Route::post('/admin/edit-category','WebManager@postEditCategory')->name('postEditCategory');

Route::get('/admin/remove-category/{id}','WebManager@getRemoveCategory')->name('getRemoveCategory');

Route::post('admin/add-author','WebManager@postAddAuthor')->name('postAddAuthor');

Route::get('admin/edit-author/{id}','WebManager@getEditAuthor')->name('getEditAuthor');

Route::get('admin/edit-customer/{id}','WebManager@getEditCustomer')->name('getEditCustomer');

Route::get('admin/edit-admin/{id}','WebManager@getEditAdmin')->name('getEditAdmin');

Route::post('admin/edit-author','WebManager@postEditAuthor')->name('postEditAuthor');

Route::post('admin/edit-customer','WebManager@postEditCustomer')->name('postEditCustomer');

Route::post('admin/edit-admin','WebManager@postEditAdmin')->name('postEditAdmin');

Route::get('/admin/remove-author/{id}','WebManager@getRemoveAuthor')->name('getRemoveAuthor');

Route::get('/admin/remove-customer/{id}','WebManager@getRemoveCustomer')->name('getRemoveCustomer');

Route::get('/admin/remove-admin/{id}','WebManager@getRemoveAdmin')->name('getRemoveAdmin');

Route::post('/admin/add-book','WebManager@postAddBook')->name('postAddBook');

Route::get('/admin/edit-book/{id}','WebManager@getEditBook')->name('getEditBook');

Route::post('/admin/edit-book','WebManager@postEditBook')->name('postEditBook');

Route::get('/admin/remove-book/{id}','WebManager@getRemoveBook')->name('getRemoveBook');


Route::get('loai-san-pham/{id}','ViewPages@getLoaiSanPham')->name('loaisanpham');

Route::get('/book_detail/{id}','WebManager@getBookDetail')->name('getBookDetail');


Route::get('admin/next3book/{id}','WebManager@getNext3Book')->name('getNext3Book');

Route::get('admin/nexttabvanhoc/{id}','WebManager@getNextTabVanHoc')->name('getNextTabVanHoc');

Route::get('admin/prevtabvanhoc/{id}','WebManager@getPrevTabVanHoc')->name('getPrevTabVanHoc');

Route::get('admin/prev3book/{id}','WebManager@getPrev3Book')->name('getPrev3Book');

Route::get('checkout','ViewPages@getContentCheckOut')->name('getContentCheckOut');


Route::get('payment','ViewPages@getContentPayment')->name('getContentPayment');

Route::get('buybook','ViewPages@getBuyBook')->name('getBuyBook');

