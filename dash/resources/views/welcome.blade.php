<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
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

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>

            <div class="routes-form">

                <div class="forms">

                    <form action="/routes" method="get" class="get-form">
                        <input type="text" class="get" placeholder="get">
                        <button type="submit">enviar</button>
                    </form>

                    <form action="/routes" method="post" class="post-form">
                        {{csrf_field()}}
                        <input type="text" class="post" placeholder="post">
                        <button type="submit">enviar</button>
                    </form>

                    <form action="/routes" method="post" class="put-form">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="put">
                        <input type="text" class="put" placeholder="Nome / PUT">
                        <button type="submit">enviar</button>
                    </form>

                    <form action="/routes" method="post" class="controller-form">
                        {{csrf_field()}}
                        <input type="text" class="post" placeholder="controller + div">
                        <button type="submit">enviar</button>
                    </form>

                    <form action="/routes/catch" method="post" class="controller-form">
                        {{csrf_field()}}
                        <input type="text" class="post" placeholder="controller + catch">
                        <button type="submit">enviar</button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</body>

</html>