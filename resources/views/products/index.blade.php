@extends('layouts.app')

@section('content')
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">Create New Product</a>

    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}

                <div>
                    <a href="{{ route('products.show', $product) }}">View</a> |
                    <a href="{{ route('products.edit', $product) }}">Edit</a>

                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
