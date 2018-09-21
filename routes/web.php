<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BlogController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/posts', 'PostController@allPosts')->name('admin.post');
	Route::get('/posts/create', 'PostController@createForm')->name('cratePostForm');
	Route::post('/posts/save', 'PostController@savePost')->name('savepost');
	Route::get('/categories', 'CategoryController@allCategories')->name('adminIndex');
	Route::get('/categories/create','CategoryController@categoryForm')->name('categoryform');
	Route::post('/categories/save','CategoryController@saveCategory');
	Route::get('/categories/updateform/{id}','CategoryController@updateCategoryForm')->name('categoryUpdateForm');
	Route::post('/categories/updated','CategoryController@updatedCategory')->name('category.update');
	Route::get('/categories/delete/{id}','CategoryController@deleteCategory')->name('category/delete');
	Route::get('/post/details/{id}','PostController@showPost')->name('post.details');
	Route::get('/post/edit/{id}','PostController@editPost')->name('post.edit');
	Route::post('/post/{id}','PostController@updatePost')->name('post.update');
	Route::get('/post/{id}','PostController@destroyPost')->name('post.delete');



});

















