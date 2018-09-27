@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            {{ $post->title }} <small>by <b>{{ $post->user->name}}</b> at <b>{{ $post->created_at->toDayDateTimeString() }}</b></small>

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>
                        <p><strong>Category: </strong>{{ $post->category->categories }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
