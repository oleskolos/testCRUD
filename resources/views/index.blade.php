@extends('layout')

@section('title', 'Users')

@section('content')

    <a role="button" class="btn btn-primary" href="{{ route('users.create') }}">Create user</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <th scope="row">{{ $user->id }}</th>
        <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
        <td><a href="{{ route('users.show', $user) }}">{{ $user->email }}</a></td>
        <td><a type="button" class="btn btn-warning" href="{{ route('users.edit', $user) }}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection