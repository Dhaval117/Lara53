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
Auth::routes();

Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/menu', 'PageController@menu');
Route::get('/contact', 'PageController@contact');
Route::get('/checkout','PageController@checkout');
Route::get('/cart-add/{id}/{name}/{price}','PageController@cart_add');
Route::get('/cart-update/{id}/{qty}','PageController@cart_update');
Route::get('/abc','PageController@abc');
Route::get('/order','PageController@order');
Route::get('/check/{pwd?}','PageController@check');
Route::get('/wrongpwd','PageController@wrongpwd');
//Route::get('/logout', function () {
//	Auth::logout();
  //  return view('home');
//});

Route::get('/admin','PageController@admin');
Route::get('/base','PageController@base')->middleware('AuthCheck');

Route::get('/insert','ItemsController@insertform')->middleware('AuthCheck');
Route::post('create','ItemsController@insert')->middleware('AuthCheck');

Route::get('view-items','ItemsController@index')->middleware('AuthCheck');
Route::get('view-orders','ItemsController@orders')->middleware('AuthCheck');
Route::get('edit-items','ItemsController@editform')->middleware('AuthCheck'); 
Route::get('edit/{id}','ItemsController@newval')->middleware('AuthCheck'); 
Route::post('edit/{id}','ItemsController@edit')->middleware('AuthCheck'); 

Route::get('delete-items','ItemsController@deleteform')->middleware('AuthCheck'); 
Route::get('delete/{id}','ItemsController@destroy')->middleware('AuthCheck');

//Route::get('/home', 'HomeController@index');
//Route::get('/practice','PageController@menu2');