@extends('layout')

@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <h1>Registration Form</h1>

        <div class="container w-50">
            <input class="form-control" type="text" name="name" placeholder="Name"><br>
            <input class="form-control" type="text" name="email" placeholder="Email"><br>
            <input class="form-control" type="text" name="location" placeholder="Location"><br>
            <input class="form-control" type="number" name="phone" placeholder="Phone number"><br>
            <button class="btn btn-success" type="submit" name="register">Register</button>
        </div>
    </form>
@endsection
