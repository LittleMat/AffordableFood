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

        	$currencies = DB::table('currencies')->orderBy('name')->get();
        	$languages = DB::table('languages')->orderBy('name')->get();

	        return view ('layouts.dashboard.dashboard_item.parameters', compact(['user', 'stat', 'status', 'currencies', 'languages']));    
    	}
    }

    public function update(Request $request)
    {
    	if(Auth::check()){
			$id = Auth::id();
			


			if ($request->hasFile('file_photo')){
            
	            $image = $request->file('file_photo');
	            $imagename = time().'.'.$image->getClientOriginalExtension();
	            $location = public_path('image/users/'.$imagename);
	            Image::make($image)->save($location);
	        }



			DB::table('users')
				->where('id', $id)
				->update([
		            'first_name' => $request->first_name, 
		            'last_name' => $request->last_name,
		            'email' => $request->email,
		            'adress' => $request->adress,
		            'currency' => $request->currency,
		            'language' => $request->language

	        	]);

	        return redirect(route('user.parameters'));
		}
       
    } 

    public function destroy($id){
    	dd($id);
    	DB::table('favorite_products')->where('user_id', $id)->delete();
    	DB::table('favorite_recipes')->where('user_id', $id)->delete();
    	DB::table('feedback')->where('author_id', $id)->delete();
    	DB::table('users')->where('id', $id)->delete();
    	
    	return view(route('admin.manage_users'));
    }

    public function index(){
    	
				$users = DB::table('users')
    			 ->join('currencies', 'currencies.id', '=', 'users.currency' )
    			 ->join('languages', 'languages.id', '=', 'users.language' )
    			 ->join('member_statuses', 'member_statuses.id', '=', 'users.member_status_id' )


    			 ->selectRaw('users.id as id, users.name as name, users.first_name as first_name, users.last_name as last_name, users.email as email, users.adress as adress, currencies.name as currency, languages.name as language, member_statuses.name as status, users.created_at as created_at')
    			 ->get();

    	


    	return view ('layouts.dashboard.dashboard_item.admin_manage_users', compact(['users']));    
    }
}

		