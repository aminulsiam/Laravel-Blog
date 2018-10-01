@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Edit Your Profile

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                        @if(session()->has('message'))
                        <h3 class="alert alert-success text-center">
                            {{ session()->get('message') }}
                        </h3>
                        @endif
                    <div class="panel-body">
                        <form action="{{ route('user.update',$user->id) }}" method="post" class="form-horizontal">
                            @csrf
                            @include('admin.profile._form')                            
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
