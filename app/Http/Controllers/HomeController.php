<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts      = Post::get()->Count();
        $categories = Category::get()->Count();
        $user       = Auth::User()->id;
        $user_posts = Post::where('user_id',$user)->get()->Count();
        return view('home',get_defined_vars());
    }
}
