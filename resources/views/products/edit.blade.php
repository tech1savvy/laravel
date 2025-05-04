@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
            @error('name')<div>{{ $message }}</div>@enderror
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')<div>{{ $message }}</div>@enderror
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
