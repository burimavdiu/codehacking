@extends('layouts.admin');

    @section('content')
        <h1>Users</h1>
        <table class="table">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
          </tr>
          @if($users)
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
              </tr>
              @endforeach
          @endif
        </table>
    @stop