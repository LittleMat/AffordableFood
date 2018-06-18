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

Route::get('/products/categories/{category}','ProductController@categories')->name('products.categories');
Route::resource('products', 'ProductController');

Route::post('comment.recipe_comment','CommentController@recipe_comment')->name('recipe.comment');
Route::post('comment.product_comment','CommentController@product_comment')->name('product.comment');
Route::resource('comment', 'CommentController');

Route::get('/', function () {
     return view('home');
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
     if(Auth::check() && Auth::user()->getRole()=='admin'){
     		$show_admin = true;
            return view('layouts.dashboard.dashboard_main', compact('show_admin'));
     }
    return view('layouts.dashboard.dashboard_main');
})->name('dashboard.index');


Route::get('/dashboard/parameters', 'UserController@show')->name('user.parameters');
Route::put('/dashboard/parameters/edit', 'UserController@update')->name('user.update');
Route::get('/dashboard/favorite_products', "FavoriteProductController@show")->name('user.favorite_products');
Route::get('/dashboard/favorite_recipes', "FavoriteRecipeController@show")->name('user.favorite_recipes');
Route::get('/dashboard/favorite_recipes/destroy/{id}', "FavoriteRecipeController@destroy")->name('user.favorite_recipes.destroy');
Route::get('/dashboard/favorite_products/destroy/{id}', "FavoriteProductController@destroy")->name('user.favorite_products.destroy');
Route::get('/dashboard/my_recipes', 'RecipeController@myrecipe')->name('dashboard.my_recipes');




Route::get('/dashboard/manage_supermarkets', 'SupermarketController@index')->name('admin.manage_supermarkets.index');
Route::put('/dashboard/manage_supermarkets/edit', 'SupermarketController@update')->name('admin.manage_supermarkets.update');
Route::get('/dashboard/manage_supermarkets/destroy/{id}', 'SupermarketController@destroy')->name('admin.manage_supermarkets.destroy');
Route::get('/dashboard/manage_supermarkets/create', 'SupermarketController@create')->name('admin.manage_supermarkets.create');


Route::get('/dashboard/manage_users', 'UserController@index')->name('admin.manage_users');
Route::get('/dashboard/manage_users/delete/{id}', 'UserController@destroy')->name('admin.manage_users.delete');



Route::get('/recipes/{recipe}/make_fav', "FavoriteRecipeController@make_fav")->name('recipes.make_fav');


Route::get('/feedback', "FeedbackController@index")->name('feedback.index');
Route::get('/feedback/create', "FeedbackController@create")->name('feedback.create');
Route::post('/feedback/store', "FeedbackController@store")->name('feedback.store');
Route::get('/feedback/destroy/{id}', "FeedbackController@destroy")->name('feedback.destroy');

Route::post('/product/{id}/supermarket_price/store', "SupermarketProductController@store")->name('supermarketProduct.store');
Route::get('/product/{prod_id}/supermarket_price/destroy/{sup_prod_id}', "SupermarketProductController@destroy")->name('supermarketProduct.destroy');


Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::post('/category/store', 'CategoryController@store')->name('category.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('recipes','RecipeController');
Route::get('/recipes/create', ['middleware' => ['auth'], 'uses'=>'RecipeController@create'])->name('recipes.create');


