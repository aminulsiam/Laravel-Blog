<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserController extends Controller
{
    // User edit
    public function edit()
    {
    	$id = Auth::User()->id;
    	$user = User::find($id);
    	return view('admin.profile.edit')->with('user',$user);
    }

    public function update($id,Request $request)
    {
    	$user = User::findOrFail($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->save();
    	session()->flash('message','Information updated successfully');
    	return redirect()->back();
    }
}
