@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Edit Post

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <!-- {!! Form::model($post, ['method' => 'post', 'url' => "/post/{$post->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!} -->

                        <form action="{{ route('post.update',$post->id) }}" method="post" class="form-horizontal">
                            @csrf
                            @include('admin.posts._form')                            
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
