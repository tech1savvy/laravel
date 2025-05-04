<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <!-- Display success message -->
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <!-- Display validation errors -->
    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('/contact') }}">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Message:</label><br>
        <textarea name="message">{{ old('message') }}</textarea><br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>