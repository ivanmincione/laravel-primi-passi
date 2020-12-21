<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>about</title>
    </head>
    <body id="about-body">
        <div class="return-home">
            <a href="{{ route("home-page") }}">HOME</a>
        </div>

        <div class="container">
            <h2>ABOUT</h2>
            <p> {{ $info }} </p>
        </div>
    </body>
</html>
