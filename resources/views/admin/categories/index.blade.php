@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                    
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Categories

                            <a href="{{ route('categoryform') }}" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Post Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <td>{{ $category->categories }}</td>
                                        <td>0</td>
                                        <td>
                                            <a href="{{ route('categoryUpdateForm',$category->id) }}" class="btn btn-xs btn-info">Edit</a>
                                            <a href="{{ route('category/delete',$category->id) }}" onclick="confirm('Are you sure want to delete this ??')" class="btn btn-xs btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2"><h3>No category available.</h3></td>
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
