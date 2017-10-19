<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($title) ? $title . ' | ' : 'Rémi Guillard - PortFolio' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
        
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>

    <body>
    <div id="Remi-Guillard">
        <div id="app">
            @yield('content')
        </div>
    </div>
    <div class="page">
        <div class="welcome_nav">
            <a href="{{ route('home') }}" class="button button--primary welcome__button">Accueil</a>
            <a href="{{ route('profil') }}" class="button button--primary welcome__button">En savoir plus sur moi</a>
            <a href="{{ route('project') }}" class="button button--primary welcome__button">Mes projets</a>
            <!--<a href="{{ asset('img/cv.png') }}" class="button button--primary welcome__button" target="_blank">Mon CV</a>-->
        </div>
    </div>
    <canvas id="canvas" width="900" height="900"></canvas>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jis.js') }}"></script>
    <script src="{{ asset('js/turbo.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</html>
