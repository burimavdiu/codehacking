
@extends('layouts.admin');

@section('content')
    @if(Session::has('deleted_post'))
        <p>{{session('deleted_post')}}</p>
    @endif
    <h1>Posts</h1>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Category</th>
            <th>User</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50px" src="{{$post->photo ? $post->photo->file : "No user photo" }}" alt="">
                        <a href="{{route('admin.posts.edit',$post->id)}}">Edit</a>
                    </td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body }}</td>
                </tr>
            @endforeach
        @endif

    </table>
@stop