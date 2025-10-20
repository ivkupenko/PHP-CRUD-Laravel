@extends('layout')

@section('content')
    <h1>Users list</h1>
    <a href="{{ route('users.create') }}">Register new user</a>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Name:</th>
                <th>Sex:</th>
                <th>Email:</th>
                <th>Location:</th>
                <th>Phone:</th>
                <th>Date:</th>
                <th>Actions:</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $singleUser)
                <tr>
                    <td>{{ $singleUser->id }}</td>
                    <td>{{ $singleUser->name }}</td>
                    <td>{{ $singleUser->sex }}</td>
                    <td>{{ $singleUser->email }}</td>
                    <td>{{ $singleUser->location }}</td>
                    <td>{{ $singleUser->phone }}</td>
                    <td>{{ $singleUser->created_at }}</td>
                    <td>
                        <form method='post' action='{{ route('users.delete', ['user' => $singleUser]) }}'>
                            @csrf
                            @method('delete')
                            <a href="{{ route('users.edit', ['user' => $singleUser]) }}" class="btn btn-primary">Edit</a>
                            <input type='submit' value='Delete' class="btn btn-danger"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
