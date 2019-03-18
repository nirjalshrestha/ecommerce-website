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

Auth::routes();

/*Admin Phase*/
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('category','CategoryController');

Route::resource('brand','BrandController');

Route::resource('product','ProductController');

Route::resource('coupen','CoupenController');


/*End Admin Phase*/





/*User Phase*/
Route::get('/user', function () {
    return view('User/master');
});

