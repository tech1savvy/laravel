<!DOCTYPE html>
<html>
    <head>
        <title> Profile </title>
    </head>
    <body>

        <p>{{Auth::user()->username}}</p>

        <form method=post action="{{ route('logout')}}">
            @csrf
            <input type="submit" value="logout">
        </form>
    </body>
</html>