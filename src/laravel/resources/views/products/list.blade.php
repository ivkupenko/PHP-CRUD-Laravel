@extends('layout')

@section('content')
    <div class="container w-100">
        <h1>Products list</h1>
        <div>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add new product</a>

            <a href="{{ route('users.index') }}" class="btn btn-info">Open users list</a><br><br>

            @if (session('success'))
                <p style="color:green">{{ session('success') }}</p>
            @endif

            <form method="GET" action="{{ route('products.list') }}" class="mb-3 d-flex align-items-center gap-2">
                <div class="btn-group">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="form-control form-control-sm" placeholder="Search by name" style="max-width: 250px;">

                    <button type="submit" class="btn btn-success btn-sm">Search</button>
            </form>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Description:</th>
                    <th>Count:</th>
                    <th>Actions:</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $singleProduct)
                    <tr>
                        <td>{{ $singleProduct->name }}</td>
                        <td>{{ $singleProduct->description }}</td>
                        <td>{{ $singleProduct->count }}</td>
                        <td>
                            <form method='post' action='{{ route('products.delete', ['product' => $singleProduct]) }}'>
                                @csrf
                                @method('delete')
                                <a href="{{ route('products.edit', ['product' => $singleProduct]) }}"
                                    class="btn btn-primary">Edit</a>
                                <input type='submit' value='Delete' class="btn btn-danger" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            {{ $products->links() }}
        </div>
    </div>
@endsection
