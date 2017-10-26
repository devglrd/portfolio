<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Rémi Guillard">
        <meta name="title" content="Rémi Guillard - PortFolio">
        <meta name="description" content="Rémi Guillard, developpeur web et mobile freelance ! Venez me découvrir et prendre contact avec moi !">
        <meta name="keywords" content="Rémi Guillard, glrd, IIM, Developpeur, Multimédia, Leonard de Vinci, Paris, Web, Freelance, laravel, Mobile">

        <meta name="robots" content="index, follow">

        <meta property="og:title" content="Rémi Guillard">
        <meta property="og:url" content="http://www.devglrd.com" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Rémi Guillard, developpeur web et mobile freelance ! Venez me découvrir et prendre contact avec moi !" />
        <meta property="og:image" content="" />

        <meta name="dc.language" content="FR">
        <meta name="dc.creator" content="Rémi Guillard">
        <meta name="dc.coverage" content="World">
        <meta name="dc.source" content="http://www.devglrd.com">
        <meta name="dc.title" content="Rémi Guillard - Portfolio">
        <meta name="dc.keywords" content="Rémi Guillard, glrd, IIM, Etudiant, Multimédia, Leonard de Vinci, Paris, Portfolio, Freelance, laravel">
        <meta name="dc.description" content="Rémi Guillard, developpeur web et mobile freelance ! Venez me découvrir et prendre contact avec moi !">
        <meta name="dc.publisher" content="Rémi Guillard">
        <meta name="dc.format" content="text/html">


        <link rel="canonical" href="http://www.devglrd.com" />
        <link rel="shortcut icon" type="image/ico" href="#" />


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
