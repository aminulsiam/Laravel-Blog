@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
    <div class="panel-heading">
        Beatae accusantium cupiditate explicabo quasi eveniet voluptate. - <small>by Marcelina Bradtke Sr.</small>

        <span class="pull-right">
            Fri, Jul 27, 2018 12:27 PM
        </span>
    </div>

    <div class="panel-body">
        <p>Vel ratione eligendi quisquam. Repellat unde facere voluptatem hic dignissimos error assumenda ut. Quibusdam recusandae at nihil numquam rerum. Veniam facere iusto quia voluptatum consequatur. Asperio...</p>
        <p>
            Tags:
            <span class="label label-default">vel</span>
        </p>
        <p>
            <span class="btn btn-sm btn-success">ادبی</span>
            <span class="btn btn-sm btn-info">Comments <span class="badge">1</span></span>

            <a href="http://gentle-everglades-40337.herokuapp.com/posts/6" class="btn btn-sm btn-primary">See more</a>
        </p>
    </div>
</div>

<div align="center">
    <ul class="pagination">
        <li class="disabled"><span>&laquo; Previous</span></li>
        <li><a href="http://gentle-everglades-40337.herokuapp.com?page=2" rel="next">Next &raquo;</a></li>
    </ul>
</div>
@endsection