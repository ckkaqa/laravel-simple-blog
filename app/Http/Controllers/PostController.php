<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
	/**
	 * Create user post
	 */
    public function create_post(Request $request)
    {
    	$post_data = $request->all();

    	$post = new Post();
    	$post->message = $post_data['message'];
    	$post->user_id = \Auth::user()->id;
    	$post->save();
    	
    	return redirect()->back();
    }

}
