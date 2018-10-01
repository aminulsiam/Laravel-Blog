<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    // show category in admin category home page
    public function allCategories()
    {
        $categories = Category::withCount('post')->orderBy('id', 'DESC')->get();
    	return view('admin.categories.index',compact('categories'));
    }

    // show category create form
    public function categoryForm()
    {
    	return view('admin.categories.create');
    }

    // store categories
    public function saveCategory(Request $request)
    {
    	$category = new Category();
    	$category->categories = $request->category;
    	$category->save();

    	session()->flash('message','Category create successfully');
    	return redirect()->back();
    }

    // update category form
    public function updateCategoryForm($id){
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    // updated category
    public function updatedCategory(Request $request){
        $category = Category::findOrFail($request->categoryId);
        $category->categories = $request->category;
        $category->save();
        return redirect()->route('adminIndex');   
    }

    // Delete catergory
    public function deleteCategory($id)
    {
        $category = Category::where('id',$id);
        $category->delete();
        session()->flash('message','Category Delete successfully');
        return redirect()->route('adminIndex');
        return redirect()->back();
    }




















}
