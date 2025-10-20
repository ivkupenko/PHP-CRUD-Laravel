@extends('layout')

@section('content')
    <form action="{{ route('users.update', ['user' => $user]) }}" method="post">
        @csrf
        @method('put')
        <div class="container w-50">
            <h1>Edit user data</h1>

            <input type="hidden" name="id" value="{{ $user->id }}" />

            <label for="name">Name</label><br>
            <input class="form-control border-secondary" type="text" id="name" name="name" value="{{ $user->name }}"><br>

            <label>Sex</label><br>
            <input type="radio" name="sex" id="sex_male" value="male" {{ $user->sex == 'male' ? 'checked' : '' }}>
            <label for="sex_male">Male</label>
            <input type="radio" name="sex" id="sex_female" value="female" {{$user->sex == 'female' ? "checked" : ''}}>
            <label for="sex_female">Female</label><br><br>

            <label for="email">Email</label><br>
            <input class="form-control border-secondary" type="text" id="email" name="email" value="{{ $user->email }}"><br>

            <label for="location">Location</label><br>
            <input class="form-control border-secondary" type="text" id="location" name="location" value="{{ $user->location }}"><br>

            <label for="phone">Phone number</label><br>
            <input class="form-control border-secondary" type="number" id="phone" name="phone" value="{{ $user->phone }}"><br>

            <button class="btn btn-success" name="edit">Edit</button>
        </div>
    </form>
@endsection
