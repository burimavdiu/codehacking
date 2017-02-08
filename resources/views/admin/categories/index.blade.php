
@extends('layouts.admin');

@section('content')
    @if(Session::has('deleted_category'))
        <p>{{session('deleted_category')}}</p>
    @endif
    <h1>Category</h1>
    <div class="row">
        <div class="col-sm-4">
            {!! Form::open(['method'=>'POST', 'action'=>'CategoriesController@store']) !!}

                <div class="fomr-group">
                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name',null, ['class'=>'form-control']) !!}
                </div>
                <div class="fomr-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
                @if($categories)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td><a href="{{route('admin.categories.edit',$category->id)}}">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                @endif

            </table>
        </div>
    </div>
@stop