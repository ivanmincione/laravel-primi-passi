<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>users</title>
    </head>
    <body>
        <div class="return-home">
            <a href="{{ route("home-page") }}">HOME</a>
        </div>
        <div class="container">
            <h1>Lista utenti</h1>
            @foreach ($users as $user)
                <p> {{ $user }} </p>
            @endforeach
        </div>
    </body>
</html>
