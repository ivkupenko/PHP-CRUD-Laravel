@extends('layout')

@section('content')
    <div class="container w-50">
        <h1>{{$product->name}}</h1>
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-info">Edit product</a>
            <br><br>

            @if (session('success'))
                <p style="color:green">{{ session('success') }}</p>
            @endif

            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Count:</strong> {{ $product->count }}</p>
            <br>

            <h3>Attributes</h3>
            @if($product->attributeValues->isEmpty())
                <p>No attributes assigned.</p>
            @else
                @foreach($product->attributeValues->groupBy('attribute.name') as $attributeName => $values)
                    <p>
                        <strong>{{ ucfirst($attributeName) }}:</strong>
                        {{ $values->pluck('value')->join(', ') }}
                    </p>
                @endforeach
            @endif
        </div>
    </div>
@endsection
