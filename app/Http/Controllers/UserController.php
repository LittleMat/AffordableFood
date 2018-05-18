<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function show()
    {
    	if(Auth::check()){
			$id = Auth::id();

	        $user = DB::table('users')           
	            ->where('id', $id)->first()
	        ;

	        $stat =[ 
	        	'nb_recipe' => DB::table('favorite_recipes')->where('user_id', $id)->count(),
	        	'nb_products' => DB::table('favorite_products')->where('user_id', $id)->count(),
	        	'nb_c_recipe' => DB::table('recipes')->where('author_id', $id)->count(),
	        ];

	        $status = DB::table('member_statuses')->where('id', $user->member_status_id)->first();


	        return view ('layouts.dashboard.dashboard_item.parameters', compact(['user', 'stat', 'status']));    
    	}
    }

    public function update(Request $request)
    {
    	if(Auth::check()){
			$id = Auth::id();

			//dd($request);

			DB::table('users')
				->where('id', $id)
				->update([
		            'first_name' => $request->first_name, 
		            'last_name' => $request->last_name,
		            'email' => $request->email,
		            'adress' => $request->adress
	        	]);

	        return redirect(route('user.parameters'));
		}
       
    } 
}
