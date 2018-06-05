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

Route::get('home',function(){
	return view('layout.home');
});

Route::get('index',[
	'as' => 'Home-kekule',
	'uses' => 'pageController@getIndex'
]);
Route::get('product',[
	'as' => 'Product-kekule',
	'uses' => 'pageController@getProduct'
]);
Route::get('shopping',[
	'as' => 'Shopping-kekule',
	'uses' => 'pageController@getShoppingCart'
]);

Route::get('admin',[
	'as' => 'Admin - Kekule SHOP',
	'uses' => 'pageController@getIndexadmin'
]);

Route::get('auth',function(){
	return view('auth');
});

