@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>
    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{$post->photo ? $post->photo->file : "No user photo" }}" alt="">
        </div>

        <div class="col-sm-9">
            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update',$post->id], 'files'=>true]) !!}

            <div class="fomr-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null, ['class'=>'form-control']) !!}
            </div>
            <div class="fomr-group">
                {!! Form::label('category_id','Category:') !!}
                {!! Form::select('category_id',[''=>'Choose Option']+$categories,null, ['class'=>'form-control']) !!}
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
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-3']) !!}
            </div>


            {!! Form::close() !!}
            {{--<form method="post" action="/posts">--}}
            {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}

            <div class="fomr-group">
                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-3']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


    @include('includes.form_errors')
@stop
