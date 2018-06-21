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
                ->selectRaw('products.id as id, products.name as name, products.photo as photo, products.description as description')            
            	->join('products', 'favorite_products.product_id', '=', 'products.id')
            	->where('favorite_products.user_id', $id)
		        ->get()
		    ;

            $supermarket_info = DB::table('supermarket_products')
                ->join('supermarkets', 'supermarket_products.supermarket_id', '=', 'supermarkets.id')

                ->select('supermarkets.Name', 'supermarket_products.price', 'supermarket_products.quantity',
                         'supermarket_products.measure_type', 'supermarket_products.product_id')  
                ->get();

            $currencies = DB::table('currencies')
                ->select('currencies.id', 'currencies.name', 'currencies.currency_name','currencies.rate','currencies.symbol')  
                ->get();


	       return view('layouts.dashboard.dashboard_item.favorite_products', compact(['favorite_products', 'supermarket_info', 'currencies']));
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
