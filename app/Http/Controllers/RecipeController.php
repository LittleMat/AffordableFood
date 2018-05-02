<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Recipes;
use Session;
use App\User;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes= Recipes::all(); //store all the recipes
        return view('layouts.recipes.index')-> withrecipes($recipes);
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
        $recipes->photo = $request->image;
        
        $recipes->author_id = Auth::user()->getId();
        
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
       $recipes = Recipes::find($id);
       return view('layouts/recipes/show')->with('recipes',$recipes); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
