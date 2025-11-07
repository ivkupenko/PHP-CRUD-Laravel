@extends('layout')

@section('content')
    <form action="{{ route('products.update', ['product' => $product]) }}" method="post">
        @csrf
        @method('put')
        <div class="container w-50">
            <h1>Edit product data</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="hidden" name="id" value="{{ $product->id }}"/>

            <label for="name">Name</label><br>
            <input class="form-control border-secondary" type="text" id="name" name="name"
                   value="{{ old('name', $product->name) }}"><br>

            <label for="description">Description</label><br>
            <input class="form-control border-secondary" type="text" id="description" name="description"
                   value="{{ old('description', $product->description) }}"><br>

            <label for="count">Count</label><br>
            <input class="form-control border-secondary" type="number" id="count" name="count"
                   value="{{ old('count', $product->count) }}"><br>

            <div class="mb-3">
                <label class="form-label">Attributes</label>

                @foreach($attributes as $attribute)
                    <div class="mb-2">
                        <label>{{ ucfirst($attribute->name) }}:</label><br>

                        @foreach($attribute->values as $value)
                            <label class="me-2">
                                <input type="checkbox"
                                       name="attributes[{{ $attribute->id }}][]"
                                       value="{{ $value->id }}"
                                       @if($product->attributeValues->contains('id', $value->id)) checked @endif
                                >
                                {{ ucfirst($value->value) }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
            </div>

                <button class="btn btn-success" name="edit">Edit</button>
        </div>
    </form>
@endsection
