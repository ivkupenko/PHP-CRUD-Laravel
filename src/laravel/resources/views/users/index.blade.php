@extends('layout')

@section('content')
    <div class="container w-100">
        <h1>Users list</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Register new user</a><br><br>

        @if (session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif

        <form method="GET" action="{{ route('users.index') }}" class="mb-3 d-flex align-items-center gap-2">
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ request('sex') ? ucfirst(request('sex')) : 'Filter by sex' }}
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <button type="submit" name="sex" value="male" class="dropdown-item"> Male</button>
                    </li>
                    <li>
                        <button type="submit" name="sex" value="female" class="dropdown-item">Female</button>
                    </li>
                </ul>
            </div>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Reset Filter</a>
        </form>

        <table class="table table-hover">
            <thead>
                <tr>
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
                        <td>{{ $singleUser->name }}</td>
                        <td>{{ $singleUser->sex }}</td>
                        <td>{{ $singleUser->email }}</td>
                        <td>{{ $singleUser->location }}</td>
                        <td>{{ $singleUser->phone }}</td>
                        <td>{{ $singleUser->created_at->format('d/m/Y') }}</td>
                        <td>
                            <form method='post' action='{{ route('users.delete', ['user' => $singleUser]) }}'>
                                @csrf
                                @method('delete')
                                <a href="{{ route('users.edit', ['user' => $singleUser]) }}"
                                    class="btn btn-primary">Edit</a>
                                <input type='submit' value='Delete' class="btn btn-danger" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            {{ $users->links() }}
        </div>
    </div>
@endsection
