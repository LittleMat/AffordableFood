<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Image;
use App\Products;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {   
        $favorite_products = null;
        $connected=false;

        $supermarket_info = DB::table('supermarket_products')
            ->join('supermarkets', 'supermarket_products.supermarket_id', '=', 'supermarkets.id')

            ->select('supermarkets.Name', 'supermarket_products.price', 'supermarket_products.quantity',
                     'supermarket_products.measure_type', 'supermarket_products.product_id', 'supermarket_products.price')  
            ->get();

        $search = $request->input('q');
        $products = DB::table('products')
        ->where('name', 'LIKE', '%'.$search.'%')
        ->paginate(9);
        
        $currencies = DB::table('currencies')
            ->select('currencies.id', 'currencies.name', 'currencies.currency_name','currencies.rate','currencies.symbol')  
            ->get();

        $categories = DB::table('categories')
            ->orderBy('name')
            ->select('categories.name')
            ->get();

        if(Auth::check()){
            $connected = true;
            $id = Auth::id();
            $favorite_products = DB::table('favorite_products')->where('user_id', $id)->select('product_id')->get();
        }

        return view('layouts.products.test_products', compact(['supermarket_info', 'categories', 'products','currencies','favorite_products','connected']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->orderBy('name')->get();
        $brands = DB::table('brands')->orderBy('name')->get();


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

            $products = new Products;
        
            $products->name = $request->title;
            $products->description = $request->description; 
            $products->brand_id = $request->brand;
            $products->category_id = $request->category;
        
          if ($request->hasFile('featured_image')){
            
            $image = $request->file('featured_image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('image/products/'.$imagename);
            Image::make($image)->save($location);
            
            $products->photo = $imagename ;
            }
        
        $products->save();
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
            ->select('supermarkets.Name', 'supermarket_products.price', 'supermarket_products.quantity', 'supermarket_products.measure_type', 'supermarket_products.id')  
            ->where('supermarket_products.product_id', $id)->orderBy('supermarket_products.price') 
            ->get();

        $currencies = DB::table('currencies')
            ->select('currencies.id', 'currencies.name', 'currencies.currency_name','currencies.rate','currencies.symbol')  
            ->get();
        
        $comments = DB::table('comments')
            ->join('users','comments.author_id','=','users.id')
            ->selectRaw('comments.description ,users.name as na')
            ->where('comments.product_id',$id)
            ->get();

        $supermarkets = DB::select('select id, Name from supermarkets where id not in (select supermarket_id from supermarket_products where product_id= :id) ', ['id' => $id]);

        $product = $product[0];
        
        return view ('layouts.products.show_product', compact(['product', 'supermarket_info','currencies', 'supermarkets', 'comments']));    
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
        $product = DB::table('products')->where('id', $id)->limit(1);
        
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
    
        public function categories($category)
    {
            
        $supermarket_info = DB::table('supermarket_products')
            ->join('supermarkets', 'supermarket_products.supermarket_id', '=', 'supermarkets.id')
            ->select('supermarkets.Name', 'supermarket_products.price', 'supermarket_products.quantity', 'supermarket_products.measure_type', 'supermarket_products.product_id', 'supermarket_products.price')  
            ->get();
            
            
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name','products.id','products.name','products.description','products.grade','products.photo','products.brand_id','products.category_id')
            ->where('categories.name', $category)
            ->get(); 
            
        $categories = DB::table('categories')
            ->select('categories.name')
            ->get();
            
        $currencies = DB::table('currencies')
            ->select('currencies.id', 'currencies.name', 'currencies.currency_name','currencies.rate','currencies.symbol')  
            ->get();
        
             
        /*$search = $request->input('q');
        $products = DB::table('products')
        ->where('name', 'LIKE', '%'.$search.'%')
        ->paginate(9);    */
            
        return view('layouts.products.category',compact(['categories', 'products','supermarket_info','currencies']));
    }

}
