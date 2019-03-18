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

Route::resource('user','UserController');

/*Route::get('user/[category]','UserController@catproduct');*/

/*Route::get('catproduct/{','CatproductController');*/
Route::resource('catproduct','CatproductController');

Route::get('search','ViewController@search_product')->name('search');

//Route::resource('catproduct/{category}','ViewController@catproduct');

//Route::get('track','ViewController@track');

Route::get('shop','ViewController@shopview')->name('shop');

