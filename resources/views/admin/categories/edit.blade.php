@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Edit Category

                            <a href="{{ url('admin/categories') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                    {!! Form::model($category,['method'=>'post','route'=>'category.update', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}

                            <div class="col-md-8">
                                {!! Form::text('category',$category->categories, ['class' => 'form-control', 'required', 'autofocus']) !!}

                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            </div>
                        </div>

                            <input type="hidden" name="categoryId" value="{{ $category->id }}">
                               
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
