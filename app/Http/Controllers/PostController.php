<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\PostsRequest;
use Auth;

class PostController extends Controller
{
    // show all post in user login home panel
    public function allPosts(){
        $user_id = Auth::User()->id;
        $posts = Post::where('user_id',$user_id)->orderBy('id','DESC')->get();
    	return view('admin.posts.index',compact('posts'));
    }

    // create post form
    public function createForm()
    {
    	$categories = Category::orderBy('id','DESC')->get(['id','categories']);
    	return view('admin.posts.create',compact('categories'));
    }

    // save post
    public function savePost(PostsRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::User()->id;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->back();
    }

    // Show post in single
    public function showPost($id)
    {
        $post = Post::where('id',$id)->first();
        return view('admin.posts.show',compact('post'));
    }

    // edit post form
    public function editPost($id)
    {
        $post = Post::where('id',$id)->first();
        $categories = Category::all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    // update post
    public function updatePost($id,Request $request)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::User()->id;
        $post->category_id = $request->category_id;
        $post->save();
        session()->flash('message','Post updated successfully');
        return redirect()->route('admin.post');
    }

    // destroy post
    public function destroyPost($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('message','Post delete successfully');
        return redirect()->route('admin.post');
    }




}
