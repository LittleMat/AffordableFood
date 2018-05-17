<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('layouts.products.test_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        $brands = DB::table('brands')->get();


        return view('layouts.products.store_product', compact(['categories', 'brands']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Insertion
        DB::table('products')->insert([
            'name' => $request->title, 
            'description' => $request->description,
            'brand_id' => $request->brand,
            'category_id' => $request->category
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->selectRaw('categories.id as cat_id, categories.name as cat_name, products.name as prod_name, brands.id as brand_id, brands.Name as brand_name, products.id, products.description, products.grade, products.photo')            
            ->where('products.id', $id)->get()
        ;

        $supermarket_info = DB::table('supermarket_products')
            ->join('supermarkets', 'supermarket_products.supermarket_id', '=', 'supermarkets.id')
            ->select('supermarkets.Name', 'supermarket_products.price', 'supermarket_products.quantity', 'supermarket_products.measure_type')  
            ->where('supermarket_products.product_id', $id)
            ->get();

        $product = $product[0];

        return view ('layouts.products.show_product', compact(['product', 'supermarket_info']));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $brands = DB::table('brands')->get();

        return view('layouts.products.edit_product', compact(['product', 'categories', 'brands']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        
        $product->update([
            'name' => $request->title, 
            'description' => $request->description,
            'brand_id' => $request->brand,
            'category_id' => $request->category
        ]);

        return redirect(route('products.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products.index');
    }


    
}
