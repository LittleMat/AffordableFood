<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupermarketController extends Controller
{
	public function index()
    {
        $supermarkets = DB::table('supermarkets')->get();

        return view('layouts.dashboard.dashboard_item.admin_manage_supermarkets', compact('supermarkets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supermarkets = DB::table('supermarkets')->get();

        return view('layouts.dashboard.dashboard_item.admin_manage_supermarkets_create', compact('supermarkets'));
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
        DB::table('supermarkets')->insert([
            'name' => $request->name, 
            'adress' => $request->adress,
            'opening_hours' => $request->opening_hours,
            'description' => $request->description
        ]);

        return redirect()->route('admin.manage_supermarkets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
    	dd($id);
        $supermarket = DB::table('supermarkets')->where('id', $id)->first();
        
        $supermarket->update([
            'name' => $request->name, 
	        'adress' => $request->adress,
	        'opening_hours' => $request->opening_hours,
	        'description' => $request->description
        ]);

        return redirect(route('admin.manage_supermarkets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	dd('stop plz');
    	DB::table('supermarket_products')->where('supermarket_id', $id)->delete();
        DB::table('supermarkets')->where('id', $id)->delete();
        return redirect()->route('admin.manage_supermarkets.index');
    }
}
