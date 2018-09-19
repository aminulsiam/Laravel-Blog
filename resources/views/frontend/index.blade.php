@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                @foreach($posts as $post)
				<div class="panel panel-default">
    <div class="panel-heading">
        {{ $post->title }}

        <span class="pull-right">
           {{ $post->created_at }}
        </span>
    </div>

    <div class="panel-body">
        <p>{{ $post->body }}</p>
        <p>
            Category:
            <span class="label label-default">{{ $post->category->categories }}</span>
        </p>
        <p>
            <span class="btn btn-sm btn-success">ادبی</span>
            <span class="btn btn-sm btn-info">Comments <span class="badge">1</span></span>

            <a href="http://gentle-everglades-40337.herokuapp.com/posts/6" class="btn btn-sm btn-primary">See more</a>
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