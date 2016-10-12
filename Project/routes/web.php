<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Routes For Frontend pages
Route::get('/','PageController@index');
Route::get('/index','PageController@index');

Route::get('/ProductCategoriesPage','PageController@ProductCategoriesPage');
Route::get('/ProductDetailsPage','PageController@ProductDetailsPage');
Route::get('/CheckoutPage','PageController@CheckoutPage');
Route::get('/OrderConfirmationPage','PageController@OrderConfirmationPage');
Route::get('/SignUpPage','PageController@SignUpPage');
Route::get('/ResetPasswordPage','PageController@ResetPasswordPage');
Route::get('/ResetPasswordPageReset','PageController@ResetPasswordPageReset');
Route::get('/SignInPage','PageController@SignInPage');
Route::get('/UserOrderHistoryPage','PageController@UserOrderHistoryPage');
Route::get('/UserMyProfilePage','PageController@UserMyProfilePage');
Route::get('/UserMyProfilePageEdit','PageController@UserMyProfilePageEdit');


//Routes For Backend pages
Route::get('/Admin','PageController@Dashboard');
Route::get('/Dashboard','PageController@Dashboard');

Route::get('/OrderListingPage','PageController@OrderListingPage');
//// Route::get('/CategoryPageAddCategory','PageController@CategoryPageAddCategory');
// Route::get('/CategoryPageEditCategory','PageController@CategoryPageEditCategory');
Route::get('/CategoryPageListattributes','PageController@CategoryPageListattributes');
Route::get('/CategoryPageProductListing','PageController@CategoryPageProductListing');
/*Route::get('/ProductsPage','PageController@ProductsPage');
Route::get('/ProductsPageAddProduct','PageController@ProductsPageAddProduct');
Route::get('/ProductsPageEditProduct','PageController@ProductsPageEditProduct');*/
Route::get('/BannersPage','PageController@BannersPage');
Route::get('/StaticPages','PageController@StaticPages');

<<<<<<< HEAD
=======

>>>>>>> f6d14d212d3ffbd22643e32e8584284ba2858d55

//for Product Routes

Route::get('ProductsPageAddProduct','ProductController@create');
Route::post('store','ProductController@store');
Route::get('ProductsPage','ProductController@index');
Route::get("delete/{id}","ProductController@destroy");
Route::get('edit/{id}','ProductController@edit');
Route::patch('edit/update/{id}','ProductController@update');

//Category Product List

Route::get('/CategoryPageProductListing','ProductController@indexList');
Route::get("deletelist/{id}","ProductController@destroyList");
Route::get('editlist/{id}','ProductController@edit');
Route::patch('editlist/update/{id}','ProductController@updateList');

//for category Routes

Route::get('CategoryPageAddCategory','CategoryController@createcat');
Route::post('storecat','CategoryController@storecat');
Route::get('CategoryPage','CategoryController@indexcat');
Route::get("deletecat/{id}","CategoryController@destroycat");
Route::get('editcat/{id}','CategoryController@editcat');
Route::patch('editcat/updatecat/{id}','CategoryController@updatecat');


Auth::routes();
Route::get('/SignInPage', 'HomeController@index');

