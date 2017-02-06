@extends('layouts.admin')

    @section('content')

        <h1>Create User</h1>

        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

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
                {!! Form::select('role_id',[''=>'Choose Option']+$roles, 0, ['class'=>'form-control']) !!}
            </div>
            <div class="fomr-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0 , ['class'=>'form-control']) !!}
            </div>
            <div class="fomr-group">
                {!! Form::label('file','Photo:') !!}
                {!! Form::file('file', ['class'=>'form-control']) !!}
            </div>
            <div class="fomr-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="fomr-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
        {!! Form::close() !!}

        @include('includes.form_errors')
    @stop
