<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Mabel Records</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DorivaTech" />
        <meta name="keywords" content="dorivatech" />
        <meta name="description" content="DorivaTech" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- link icon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

        <style lang="scss">
            @import "./css/fonts.css";

            * { margin: 0; padding: 0; text-decoration: none; }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                background-image:
                    linear-gradient(
                        rgba(0, 0, 0, .5),
                        rgba(0, 0, 0, .5)
                    ),
                    url("{{ asset('images/entrance.jpg') }}")
                ;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            .container-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container-logo {
                width: 150px;
                height: 150px;
                display: flex;
                margin-bottom: 0px;
                border-radius: 50%;
            }

            .container-logo .logo {
                object-fit: contain;
                width: 100%;
                height: 100%;
            }

            .container-title {
                text-transform: uppercase;
                letter-spacing: 2px;
                font: normal normal normal 20pt/25pt "Neo Sans Pro Medium";
                text-shadow: 0 0 5px black;
                margin-bottom: 20px;
                margin-top: 50px;
                color: white;
                overflow: hidden;
                white-space: nowrap;
                padding: 5px;
                text-align: center;
                position: relative;

                animation-name: tiping;
                animation-duration: 4s;
                animation-timing-function: steps(20);
                animation-iteration-count: infinite;
                animation-direction: alternate;
                animation-delay: .5s
            }

            .container-title span {
                color: red;
                text-shadow: 0 0 5px white;
            }

            .container-start-button {
                padding: 15px 30px;
                color: red;
                border-color: white;
                border: 1px solid white;
                border-radius: 5px;
                text-transform: uppercase;
                font: normal normal normal 15pt/15pt "Neo Sans Pro Medium";
                text-shadow: 0 0 2px white;
                transition: all 1s;
            }

            .container-start-button:hover {
                background: red;
                border-color: red;
                color: white;
                box-shadow: 0 0 1px white;
                text-shadow: 0 0 5px white;
            }

            @keyframes tiping {
                from { width: 0; }
                75% { width: 380px; }
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="container-content">
                <div class="container-logo">
                    <img src="{{ asset('admin/images/logo_red_white_without_legend.png') }}" alt="" class="logo" />
                </div>

                <h1 class="container-title">Olá e seja <span>bem-vindo ❤</span></h1>
                <a href="{{ route('admin') }}" class="container-start-button">Começar</a>
            </div>
        </div>
    </body>
</html>