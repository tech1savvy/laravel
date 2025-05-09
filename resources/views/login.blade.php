<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
    </head>
    <body>
        <form method=post action="{{ route('login')}}">
            @csrf
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="login">
        </form>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif
    </body>
</html>