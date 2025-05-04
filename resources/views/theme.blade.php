<!-- resources/views/theme.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
</head>
<body>
    <h2>Current theme: {{ request()->cookie('theme', 'light') }}</h2>

    <form method="POST" action="{{ route('set.theme') }}">
        @csrf
        <button type="submit" name="theme" value="dark">Set Dark Theme</button>
        <button type="submit" name="theme" value="light">Set Light Theme</button>
    </form>
</body>
</html>