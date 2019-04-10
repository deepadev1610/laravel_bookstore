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


//-------------------registration routes------------------
Route::get('index',function(){
	return view('cover.index');
});
Route::get('register','RegistrationController@create');
Route::post('register','RegistrationController@store');
//--------------------login routes------------------------
Route::get('login','SessionController@create');
Route::post('login','SessionController@store');
Route::get('logout','SessionController@destroy');
Route::get('home',function(){
	return view('sessions.home');
});
//-------------------about page--------------------------
Route::get('about',function(){
	return view('about');
});
//--------------------cart functionality-----------------
Route::get('books',function(){
	return view('book');
});
Route::get('/', function(){
	return view('cover.index');
});
 
Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');
 
Route::delete('remove-from-cart', 'ProductsController@remove');
//-------------------------image gallery test-----------------
Route::get('gallery',[
	'uses'=> 'ProductController@getIndex',
	'as'=>'product.index'
]);
Route::get('/add-to-cart/{id}',[
	'uses'=> 'ProductController@getAddToCart',
	'as'=> 'product.addtocart'
]);
Route::get('/shopping-cart',[
	'uses'=> 'ProductController@getCart',
	'as'=> 'product.shoppingCart'
]);
Route::get('endsession','ProductController@destroy');
Route::get('/remove-from-cart/{id}',[
	'uses'=> 'ProductController@remove',
	'as'=> 'product.remove'
]);
