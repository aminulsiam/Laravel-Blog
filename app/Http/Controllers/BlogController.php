<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    // root
    public function index()
    {
    	$posts = Post::all();
    	return view('frontend.index',compact('posts'));
    }


}
