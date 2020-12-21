<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Laravel primi passi</title>
    </head>
    <body>

        <div class="container">
            <a href="{{ route("home-page") }}">
                <h1>Laravel primi passi</h1>
            </a>

            <p>
                Ciao, {{ $name }} {{ $surname }}
            </p>
        </div>

    </body>
</html>
