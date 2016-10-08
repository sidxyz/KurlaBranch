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
Route::get('/CategoryPage','PageController@CategoryPage');
Route::get('/CategoryPageAddCategory','PageController@CategoryPageAddCategory');
Route::get('/CategoryPageEditCategory','PageController@CategoryPageEditCategory');
Route::get('/CategoryPageListattributes','PageController@CategoryPageListattributes');
Route::get('/CategoryPageProductListing','PageController@CategoryPageProductListing');
Route::get('/ProductsPage','PageController@ProductsPage');
Route::get('/ProductsPageAddProduct','PageController@ProductsPageAddProduct');
Route::get('/ProductsPageEditProduct','PageController@ProductsPageEditProduct');
Route::get('/BannersPage','PageController@BannersPage');
Route::get('/StaticPages','PageController@StaticPages');