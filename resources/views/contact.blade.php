<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>contact</title>
    </head>
    <body id ="contact-body">
        <div class="return-home">
            <a href="{{ route("home-page") }}">HOME</a>
        </div>

        <div class="container">
            <h2>Contatti</h2>
            <p>Tel: {{ $tel }} </p>
            <p>Country: {{ $country }} </p>
            <p>City: {{ $city }} </p>
            <p>Address: {{ $address }} </p>
        </div>
    </body>
</html>
