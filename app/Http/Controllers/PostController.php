<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    // show all post in user login home panel
    public function allPosts(){
    	return view('admin.posts.index');
    }

    // create post form
    public function createForm()
    {
    	$categories = Category::orderBy('id', 'DESC')->get(['id','categories']);
    	return view('admin.posts.create',compact('categories'));
    }

    // save post
    public function savePost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->back();

    }



}
