<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Permanent+Marker:200,600" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            color: #636b6f;
            font-family: 'Press Start 2P', cursive;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
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
    <div id="app" class="container">
        <section class="jumbotron text-center ghost-background">
            <div class="content">
                <div class="title m-b-md">
                    <img src="https://fontmeme.com/permalink/190904/abf2d895ec518ac1118cdca9f4d31c5e.png" alt="pokemon-font" border="0">
                </div>

                <div class="links">
                    <a href="{{url('/')}}">Pokemon</a>
                    <a href="{{url('/types')}}">Types</a>
                    <a href="{{url('/')}}">Moves</a>
                </div>
            </div>
        </section>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
