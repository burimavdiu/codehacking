
@extends('layouts.admin');

    @section('content')

        <h1>Users</h1>
        <table class="table">
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
          </tr>
          @if($users)
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td><img height="50px" src="{{$user->photo ? $user->photo->file : "No user photo" }}" alt=""><a
                            href="{{route('admin.users.edit',$user->id)}}">Edit</a></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
              </tr>
              @endforeach
          @endif
        </table>
    @stop