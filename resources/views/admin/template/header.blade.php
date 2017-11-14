<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app/flaticon.css') }}">

    <script src="{{ asset('js/app/jquery.min.js') }}"></script>

    <style>
        img{
            width: 100%;
        }
    </style>
</head>
<body>
