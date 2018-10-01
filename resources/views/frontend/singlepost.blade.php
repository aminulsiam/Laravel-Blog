@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            {{ $post->title }} <small>by <b>{{ $post->user->name}}</b> at <b>{{ $post->created_at->toDayDateTimeString() }}</b></small>
        </h3>
    </div>

    <div class="panel-body">
        <p>{{ $post->body }}</p>
        <p>
            Category:
            <span class="label label-default">{{ $post->category->categories }}</span>
            <br>Author:
            <span class="label label-default">{{ $post->user->name }}</span>
        </p>
        <p>
            <!-- <span class="btn btn-sm btn-success">ادبی</span>
            <span class="btn btn-sm btn-info">Comments <span class="badge">1</span></span> -->

            
        </p>
    </div>
</div>

			</div>
		</div>
	</div>
@endsection