@extends('layout')


@section('title', @isset($user) ? 'Update ' .$user->name : 'Create user')

@section('content')

    <a type="button" class="btn btn-secondary mt-3" href="{{ route('users.index') }}">Back to users</a>
    <form method="POST" 
        @if(isset($user)) 
        action="{{ route('users.update', $user) }}"
        @else
        action="{{ route('users.store') }}" 
        @endif
        class="mt-3">

        @isset($user)
            @method('PUT')
        @endisset
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enter your name</label>
            <input 
            value="{{ isset($user) ? $user->name : null }}"
            name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Enter your email</label>
            <input
            value="{{ isset($user) ? $user->email : null }}"
            name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
        </div>

        <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Create' }}</button>
    </form>

@endsection