@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>
    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

        <div class="fomr-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',[''=>'Choose Option']+$categories,0, ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('body','Description:') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control','row'=>'3']) !!}
        </div>

        <div class="fomr-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0 , ['class'=>'form-control']) !!}
        </div>

        <div class="fomr-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
@stop
