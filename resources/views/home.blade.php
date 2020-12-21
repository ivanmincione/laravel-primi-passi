<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Laravel primi passi</title>
    </head>
    <body>
        <div class="return-home">
            <a href="{{ route("home-page") }}">HOME</a>
        </div>

        <div class="container">
            <a href="{{ route("home-page") }}">
                <h1>Laravel primi passi</h1>
            </a>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route("users-page") }}">Users</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>

                </ul>
            </div>
        </div>

    </body>
</html>
