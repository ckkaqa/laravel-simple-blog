<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\User;

class LandingController extends Controller
{
    public function index(){
    	$data['posts'] = Post::orderBy('created_at', 'desc')->get();

    	$data['registered_user'] = User::get()->count();

    	return view('landing', $data);
    }
}
