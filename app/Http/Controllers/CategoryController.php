<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
	public function store(Request $request)
    {
    	$exist = DB::table('categories')->where('name', $request->category_name)->count();

    	if($exist==0){ //Check if does exist
    		 //Insertion
        	DB::table('categories')->insert([
            	'name' => $request->category_name, 
        	]);
    	}
       

        return redirect()->route('products.create');
    }
}
