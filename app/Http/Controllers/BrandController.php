<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function store(Request $request)
    {

    	$exist = DB::table('brands')->where('name', $request->name_brand)->count();

    	if($exist==0){ //Check if does exist
    		 //Insertion
        	DB::table('brands')->insert([
            	'name' => $request->name_brand, 
        	]);
    	}
       

        return redirect()->route('products.create');
    }
}
