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
    	$posts = Post::with('category')->orderBy('id','DESC')->get();
    	return view('frontend.index',compact('posts'));
    }

    // show single post in frontend
    public function singlePost($id)
    {
        $post = Post::find($id);
        return view('frontend.singlepost')->with('post',$post);
    }


}
