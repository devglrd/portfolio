<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Rémi Guillard">
        <meta name="title" content="Rémi Guillard - Developpeur Web et Mobile">
        <meta name="description" content="Rémi Guillard, je suis developpeur web et mobile freelance ! Venez découvrir mes services et prendre contact avec moi !">
        <meta name="keywords" content="Rémi Guillard, glrd, IIM, Developpeur, Multimédia, Leonard de Vinci, Paris, Web, Freelance, laravel, Mobile">

        <meta name="robots" content="index, follow">

        <meta property="og:title" content="Rémi Guillard">
        <meta property="og:url" content="http://www.devglrd.com" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Rémi Guillard, developpeur web et mobile freelance ! Venez découvrir mes services et prendre contact avec moi !" />
        <meta property="og:image" content="" />

        <meta name="dc.language" content="FR">
        <meta name="dc.creator" content="Rémi Guillard">
        <meta name="dc.coverage" content="World">
        <meta name="dc.source" content="http://www.devglrd.com">
        <meta name="dc.title" content="Rémi Guillard - Portfolio">
        <meta name="dc.keywords" content="Rémi Guillard, glrd, IIM, Etudiant, Multimédia, Leonard de Vinci, Paris, Portfolio, Freelance, laravel">
        <meta name="dc.description" content="Rémi Guillard, developpeur web et mobile freelance ! Venez découvrir mes services et prendre contact avec moi !">
        <meta name="dc.publisher" content="Rémi Guillard">
        <meta name="dc.format" content="text/html">


        <link rel="canonical" href="http://www.devglrd.com" />
        <link rel="shortcut icon" type="image/ico" href="#" />


        <title>{{ isset($title) ? $title . ' | ' : 'Rémi Guillard - Developpeur Web et Mobile' }}</title>

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/current.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color-1.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Font -->
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
