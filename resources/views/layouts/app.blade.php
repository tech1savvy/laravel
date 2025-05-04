<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')
    @yield('content') <!-- section marked as 'content' will be loaded here -->
    @include('partials.footer')
</body>
</html>