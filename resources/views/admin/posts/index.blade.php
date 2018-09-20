@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts
                            <a href="{{ route('cratePostForm') }}" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse($posts as $post)
                                    <tr>
                                        <td class="col-md-3"> {{ $post->title }}</td>
                                        <td class="col-md-3"> {{ str_limit($post->body,60) }} </td>
                                        <td> {{ $post->User->name }} </td>
                                        <td> {{ $post->Category->categories }}  </td>
                                        <td>
                                            @php
                                                if($post->is_published == 0){
                                                    echo "Unpublished";
                                                }else{
                                                    echo "published";
                                                }
                                            @endphp   
                                        </td>
                                        <td>
                                            <a href="{{ route('post.details',$post->id) }}" class="btn btn-xs btn-success">Show</a>
                                            <a href="{{ route('post.edit',$post->id) }}" class="btn btn-xs btn-info">Edit</a>
                                            <a href="" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                    @endforelse
                                
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
