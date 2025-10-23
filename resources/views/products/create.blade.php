@extends('layout')

@section('content')
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="container w-50">
            <h1>Add new product</h1>

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
            <input class="form-control" type="text" name="name" placeholder="Name" id="name"><br>

            <label for="description">Description</label><br>
            <input class="form-control" type="text" name="description" placeholder="Description" id="decsription"><br>

            <label for="count">Count</label><br>
            <input class="form-control" type="number" name="count" placeholder="Count" id="count"><br>

            <button class="btn btn-success" type="submit" name="register">Add product</button>
        </div>
    </form>
@endsection
