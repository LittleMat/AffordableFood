<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Recipes;
use App\FavoriteRecipes;
use Session;
use App\User;
use Image;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{

    public function __construct(){
        $this->middleware('admin', ['only'=>'create']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorite_recipes = null;
        $connected=false;

        $recipes= Recipes::orderBy('updated_at', 'desc')->paginate(5); //store all the recipes

        if(Auth::check()){
            $connected = true;
            $id = Auth::id();
            $favorite_recipes = DB::table('favorite_recipes')->where('user_id', $id)->select('recipe_id')->get();
        }

        if(Auth::check() && Auth::user()->getRole()=='admin'){
            return view('layouts.recipes.index_admin', compact(['recipes', 'favorite_recipes', 'connected']));
        }
        return view('layouts.recipes.index', compact(['recipes', 'favorite_recipes', 'connected']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layouts/recipes/create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,array(
                'title' => 'required|max:255|min:5',
                'description' => 'required'
        ));
        
        //store
        $recipes = new Recipes;
        
        $recipes->title = $request->title;
        $recipes->description = $request->description;
        
        $recipes->author_id = Auth::user()->getId();
        

        if ($request->hasFile('featured_image')){
            
            $image = $request->file('featured_image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('image/'.$imagename);
            Image::make($image)->save($location);
            
            $recipes->image = $imagename ;
        }
        
        $recipes->save();
        
        Session::flash('success','Recipe created :)');
        
        //redirect
        return redirect()->route('recipes.show',$recipes->id);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favorite_recipes = null;
        $connected=false;

       $recipes = Recipes::find($id);
        
        if(Auth::check()){
            $connected = true;
            $id = Auth::id();
            $favorite_recipes = DB::table('favorite_recipes')->where('user_id', $id)->select('recipe_id')->get();
        } 

       return view('layouts/recipes/show', compact(['recipes', 'favorite_recipes', 'connected'])); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipes = Recipes::find($id);
        return view('layouts/recipes/edit')->with('recipes',$recipes);    
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
        
        //validate
        $this->validate($request,array(
                'title' => 'required|max:255|min:5',
                'description' => 'required'
        ));
        
        //store
        $recipes = Recipes::find($id);
        
        $recipes->title = $request->input('title');
        $recipes->description = $request->input('description');

        if ($request->hasFile('featured_image')){
            
            $image = $request->file('featured_image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('image/'.$imagename);
            Image::make($image)->save($location);
            
            $recipes->image = $imagename ;
        }
        
        $recipes->save();
        Session::flash('success','Recipe updated :)');
        
        //redirect
        return redirect()->route('recipes.show',$recipes->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $recipes = Recipes::find($id);
        
        $recipes->delete();
        
        Session::flash('success','The post was deleted :)');
        return redirect()->route('recipes.index');        
    }
}
