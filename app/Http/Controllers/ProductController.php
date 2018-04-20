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
        $product = DB::table('products')->where('id', $id)->first();
        $brand_id = DB::table('products')->where('id', $id)->first()->brand_id;
        $category_id = DB::table('products')->where('id', $id)->first()->category_id;
        $brand_name = DB::table('brands')->where('id', $brand_id)->first()->name;
        $category_name = DB::table('categories')->where('id', $category_id)->first()->name;

        return view ('layouts.products.show_product', compact(['product', 'category_name', 'brand_name']));    
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
        return view('layouts.products.edit_product', compact('product'));
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
