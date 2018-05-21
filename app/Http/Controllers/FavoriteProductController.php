<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FavoriteProducts;

class FavoriteProductController extends Controller
{
     public function show()
    {
       $favp= FavoriteProducts::All(); //store all the recipes
       return view('layouts.dashboard.favorite_recipes')-> withfavr($favr);
    }
}
