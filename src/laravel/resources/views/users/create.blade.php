@extends('layout')

@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="container w-50">
            <h1>Registration Form</h1>

            <label for="name">Name</label><br>
            <input class="form-control" type="text" name="name" placeholder="Name" id="name"><br>

            <label>Sex</label><br>
            <input type="radio" name="sex" id="sex_male" value="male">
            <label for="sex_male">Male</label>
            <input type="radio" name="sex" id="sex_female" value="female">
            <label for="sex_female">Female</label><br><br>

            <label for="email">Email</label><br>
            <input class="form-control" type="text" name="email" placeholder="Email" id="email"><br>

            <label for="location">Location</label><br>
            <input class="form-control" type="text" name="location" placeholder="Location" id="location"><br>

            <label for="phone">Phone number</label><br>
            <input class="form-control" type="number" name="phone" placeholder="Phone number" id="phone"><br>

            <button class="btn btn-success" type="submit" name="register">Register</button>
        </div>
    </form>
@endsection
