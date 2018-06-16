<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Чернігів</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e5ffd8;
                color: #fff8e4;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            /*.top-center{*/
                /*position: absolute;*/
                /*right: 50%;*/
                /*left: 50%;*/
                /*margin-top: 20px;*/

            /*}*/
            .content {
                text-align: center;
            }

            .title {
                text-shadow: 2px 2px 2px white, 0 0 1em red;
                font-size: 84px;
            }

            .links > a {
                color: #fffe2b;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 2px 2px 2px black, 0 0 1em white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            body, html {
                height: 100%;
                margin: 0;
            }

            .bg {
                /* The image used */
                background-image: url("/storage/app/public/redSquare.jpg");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <div class="bg">
            <div class="flex-center position-ref full-height">

            @if (Route::has('login'))

                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Увійти</a>
                        <a href="{{ route('register') }}">Реєстрація</a>
                    @endauth
                </div>

            @endif
            <div class="content">
                <div class="title m-b-md">
                    Чернігів-цікавий
                </div>

                <div class="links">
                    <a href="{{ route('places_seeings') }}">Варто побачити</a>
                    <a href="{{ route('places_hotels') }}">Готелі</a>
                    <a href="{{ route('places_food_drinks') }}">Їсти&Пити</a>
                    <a href="{{ route('places_fun') }}">Розваги</a>
                    <a href="{{ route('city_map') }}">Карта міста</a>
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
