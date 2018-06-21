<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupermarketProductController extends Controller
{
    public function store(Request $request, $product)
    {
    
    	DB::table('supermarket_products')->insert([
    		'supermarket_id'=> $request->supermarket,
    		'product_id' => $product,
    		'price' => $request->price,
    		'quantity' => $request->quantity,
    		'measure_type' => $request->type
    	]);
	    

	    return redirect()->route('products.show', $product);
    }

    public function destroy($product, $id)
    {
    	DB::table('supermarket_products')->where('id', $id)->delete();

	    return redirect()->route('products.show',$product);
	}
}
