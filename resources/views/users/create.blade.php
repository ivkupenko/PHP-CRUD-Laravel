@extends('layout')

@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="container w-50">
            <h1>Registration Form</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="name">Name</label><br>
            <input class="form-control" type="text" name="name" placeholder="Name" id="name" value={{old("name")}}><br>

            <label for="gender_id">Gender:</label>
            <select id="gender_id" name="gender_id" class="form-control border-secondary">
                <option value="" disabled selected hidden>Choose your gender</option>

                @foreach ($genders as $gender)
                    <option value="{{ $gender->gender }}"
                        {{ old('gender_id', $user->gender_id ?? '') == $gender->id ? 'selected' : '' }}>
                        {{ ucfirst($gender->gender) }}
                    </option>
                @endforeach
            </select><br>

            <label for="email">Email</label><br>
            <input class="form-control" type="text" name="email" placeholder="Email" id="email" value={{old('email')}}><br>

            <label for="location">Location</label><br>
            <input class="form-control" type="text" name="location" placeholder="Location" id="location" value={{old('location')}}><br>

            <label for="phone">Phone number</label><br>
            <input class="form-control" type="number" name="phone" placeholder="Phone number" id="phone" value={{old('phone')}}><br>

            <button class="btn btn-success" type="submit" name="register">Register</button>
        </div>
    </form>
@endsection
