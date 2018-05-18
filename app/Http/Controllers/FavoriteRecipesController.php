<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Favorite_Recipes;
use Session;
use App\User;
use Image;

class FavoriteRecipeController extends Controller
{
    public function index()
    {
        $favr= FavoriteRecipes::All(); //store all the recipes
        return view('layouts.dashboard.favorite_recipes.blade')-> withfavr($favr);
    }


}
