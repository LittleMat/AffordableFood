<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{  
    public function recipe_comment(Request $request)
    {
        $comment = new comment;
            
        $comment->description = $request->description;
        $comment->author_id = Auth::user()->getId();
        $comment->recipe_id = $request->id;
        
        $comment->save();
        return redirect()->route('recipes.show',$request->id);
    }
    
    public function product_comment(Request $request)
    { 
        $comment = new comment;
            
        $comment->description = $request->description;
        $comment->author_id = Auth::user()->getId();
        $comment->product_id = $request->id;
        
        $comment->save();
        return redirect()->route('products.show',$request->id);
    }    
}
