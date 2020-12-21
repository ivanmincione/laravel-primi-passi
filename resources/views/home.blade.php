<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Laravel primi passi</title>
    </head>
    <body id ="home-body">
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
                        <a href="{{ route("contact-page") }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route("about-page") }}">About</a>
                    </li>

                </ul>
            </div>

            <div class="logo">
                <img src="https://logos-download.com/wp-content/uploads/2016/09/Laravel_logo_wordmark_logotype.png" alt="logo Laravel">
            </div>
        </div>

    </body>
</html>
