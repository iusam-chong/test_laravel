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

// Route::resource('/news','NewsController');

// Route::get('user/{id}', 'ShowProfile');


// Route::get('/', function() {
//     return view('welcome')->with('name','tad')->with('say','嗨!');
// });

// Route::get('/', function() {
//     $data = ['name' => 'tad', 'say' => '嗨!!'];
//     return view('welcome',$data);
// });

Route::pattern('product', '[0-9]+');

Route::get('/', 'ProductController@index')->name('index');
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::post('/cart/store', 'CartController@store')->name('cart.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

