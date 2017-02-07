@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{$user->photo ? $user->photo->file : "No user photo" }}" alt="">
        </div>
        <div class="col-sm-9">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id], 'files'=>true]) !!}

        <div class="fomr-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="fomr-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null, ['class'=>'form-control']) !!}
        </div>

        <div class="fomr-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id',[''=>'Choose Option']+$roles, null, ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null , ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <div class="fomr-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="fomr-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
        </div>
    </div>


    @include('includes.form_errors')
@stop
