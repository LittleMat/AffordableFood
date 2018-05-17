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

Route::resource('products', 'ProductController');

Route::get('/', function () {
     return view('Layouts.app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/supermarketinfo', function () {
    return view('supermarketinfo');
});

Route::get('/products/bread_product', function () {
    return view('bread_product');
});

Route::post('/', function() {
	$keyword = Input::get('keyword');

	$products = Product::where('name', 'LIKE', '%'.$keyword)->get();
	var_dump('search results');

	foreach($products as $product){
		var_dump($product->name);
	}
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('recipes','RecipeController');