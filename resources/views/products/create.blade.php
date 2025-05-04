@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')<div>{{ $message }}</div>@enderror
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description') }}</textarea>
            @error('description')<div>{{ $message }}</div>@enderror
        </div>

        <button type="submit">Create</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
