<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FavoriteProducts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteProductController extends Controller
{
    public function show()
    {
    	if(Auth::check()){
			$id = Auth::id();

		    $favorite_products = DB::table('favorite_products')  
            	->join('products', 'favorite_products.product_id', '=', 'products.id')
            	->where('favorite_products.user_id', $id)
		        ->get()
		    ;

	       return view('layouts.dashboard.dashboard_item.favorite_products', compact(['favorite_products']));
	   }
    }

    public function destroy($p_id)
    {
    	if(Auth::check()){
            $this->delete($p_id);

	        return redirect()->route('user.favorite_products');
   		}	
    }

    public function make_fav($p_id){
        if(Auth::check()){
            $id = Auth::id();

            $test = DB::table('favorite_products')
                ->where('product_id', $p_id)
                ->where('user_id', $id)
                ->select('id')
                ->get()
            ;

            if($test->count()==0){ //The product is not yet in the favorite : need to add it in 
                DB::table('favorite_products')->insert([
                    'product_id' => $p_id,
                    'user_id' => $id
                ]);
            }

            else{ //Already favorite, unfavorite it
                $this->delete($p_id);
            }

            return redirect()->route('products.index');
        }        
    }

    public function delete($p_id){
        $id = Auth::id();

            DB::table('favorite_products')
                ->where('product_id', $p_id)
                ->where('user_id', $id)
                ->delete()
            ;
    }
}
