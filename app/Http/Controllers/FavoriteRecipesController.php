<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\FavoriteRecipes;
use Session;
use App\User;
use Image;
use Illuminate\Support\Facades\DB;


class FavoriteRecipeController extends Controller
{
    public function show()
    {
    	if(Auth::check()){
			$id = Auth::id();

		    $favorite_recipes = DB::table('favorite_recipes')  
            	->join('recipes', 'favorite_recipes.recipe_id', '=', 'recipes.id')
            	->where('favorite_recipes.user_id', $id)
		        ->get()
		    ;

	       return view('layouts.dashboard.dashboard_item.favorite_recipes', compact(['favorite_recipes']));
	   }
    }

    public function destroy($r_id)
    {
    	if(Auth::check()){
            $this->delete($r_id);

	        return redirect()->route('user.favorite_recipes');
   		}	
    }

    public function make_fav($r_id){
        if(Auth::check()){
            $id = Auth::id();

            $test = DB::table('favorite_recipes')
                ->where('recipe_id', $r_id)
                ->where('user_id', $id)
                ->select('id')
                ->get()
            ;

            if($test->count()==0){ //The product is not yet in the favorite : need to add it in 
                DB::table('favorite_recipes')->insert([
                    'recipe_id' => $r_id,
                    'user_id' => $id
                ]);
            }

            else{ //Already favorite, unfavorite it
                $this->delete($r_id);
            }

            return redirect()->route('recipes.index');
        }        
    }

    public function delete($r_id){
        $id = Auth::id();

            DB::table('favorite_recipes')
                ->where('recipe_id', $r_id)
                ->where('user_id', $id)
                ->delete()
            ;
    }
}
