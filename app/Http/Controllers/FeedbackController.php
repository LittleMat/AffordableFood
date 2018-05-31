<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
    	$feedbacks = DB::table('feedbacks')
    					->join('users', 'users.id', '=', 'feedbacks.author_id')
    					->selectRaw('users.email as author, feedbacks.title as title, feedbacks.text as text, feedbacks.id as id')
    					->get();

	 	return view('layouts.feedback.feedback_index', compact('feedbacks'));
    }

    public function create()
    {
	   return view('layouts.feedback.feedback_create');
    }

    public function store(Request $request)
    {
    	if(Auth::check()){
			$id = Auth::id();

	        
	    	DB::table('feedbacks')->insert([
	    		'title'=> $request->title,
	    		'text' => $request->text,
	    		'author_id' => $id
	    	]);
	    }

	   return redirect()->route('home');
    }

    public function destroy($id)
    {
    	DB::table('feedbacks')->where('id', $id)->delete();

	   return redirect()->route('feedback.index');
	}
    
}
