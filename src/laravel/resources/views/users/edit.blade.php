@extends('layout')

@section('content')
    <form action="{{ route('users.update', ['user' => $user]) }}" method="post">
        @csrf
        @method('put')
        <div class="container w-50">
            <h1>Edit user data</h1>

            <input type="hidden" name="id" value="{{ $user->id }}" />
            <input class="form-control border-secondary" type="text" name="name" value="{{ $user->name }}"><br>
            <input class="form-control border-secondary" type="text" name="email" value="{{ $user->email }}"><br>
            <input class="form-control border-secondary" type="text" name="location" value="{{ $user->location }}"><br>
            <input class="form-control border-secondary" type="number" name="phone" value="{{ $user->phone }}"><br>
            <button class="btn btn-success" name="edit">Edit</button>
        </div>
    </form>
@endsection
