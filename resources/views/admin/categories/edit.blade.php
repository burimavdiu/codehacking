@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>
    <div class="row">

        <div class="col-sm-9">
            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['CategoriesController@update',$category->id], ]) !!}

            <div class="fomr-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>

            <div class="fomr-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-3']) !!}
            </div>


            {!! Form::close() !!}
            {{--<form method="post" action="/posts">--}}
            {!! Form::open(['method'=>'DELETE', 'action'=>['CategoriesController@destroy',$category->id]]) !!}

            <div class="fomr-group">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-3']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


    @include('includes.form_errors')
@stop
