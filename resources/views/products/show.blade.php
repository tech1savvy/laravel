@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.edit', $product) }}">Edit</a> |
    <a href="{{ route('products.index') }}">Back to List</a>
@endsection
