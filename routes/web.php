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

// Route::get('/products', 'ProductController@categorienames')->name('products._productnav');

// Route::get('/{lang?}', function ($lang=null) {
// 	 App::setlocale($lang);
//      return view('#');
// });

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.dashboard_main');
})->name('dashboard.index');



Route::get('/dashboard/parameters', 'UserController@show')->name('user.parameters');
Route::put('/dashboard/parameters/edit', 'UserController@update')->name('user.update');

Route::get('/dashboard/favorite_products', function () {
    return view('layouts.dashboard.dashboard_item.favorite_products');
})->name('dashboard.favorite_products');

Route::get('/dashboard/favorite_recipes', function () {
    return view('layouts.dashboard.dashboard_item.favorite_recipes');
})->name('dashboard.favorite_recipes');

Route::get('/dashboard/my_recipes', function () {
    return view('layouts.dashboard.dashboard_item.my_recipes');
})->name('dashboard.my_recipes');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('recipes','RecipeController');

// Route::get('FavoriteRecipes', 'Auth\FavoriteRecipesController@index');
