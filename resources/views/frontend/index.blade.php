@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                @foreach($posts as $post)
				<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            {{ $post->title }} <small>by <b>{{ $post->user->name}}</b> at <b>{{ $post->created_at->toDayDateTimeString() }}</b></small>
        </h3>
    </div>

    <div class="panel-body">
        <p>{{ str_limit($post->body,450).'.....' }}</p>
        <p>
            Category:
            <span class="label label-default">{{ $post->category->categories }}</span>
            <a href="{{ route('single.posts',$post->id) }}" class="btn btn-primary btn-xs">See more</a>
        </p>
        <p>
            <!-- <span class="btn btn-sm btn-success">ادبی</span>
            <span class="btn btn-sm btn-info">Comments <span class="badge">1</span></span> -->

            
        </p>
    </div>
</div>
@endforeach

<div align="center">
    <ul class="pagination">
        <li class="disabled"><span>&laquo; Previous</span></li>
        <li><a href="http://gentle-everglades-40337.herokuapp.com?page=2" rel="next">Next &raquo;</a></li>
    </ul>
</div>
			</div>
		</div>
	</div>
@endsection