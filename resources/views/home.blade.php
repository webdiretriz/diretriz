<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diretriz Informática</title>

    {{--style--}}
    <link rel="shortcut icon" href="{{ url(mix('images/favicon.png')) }}"/>
    <link rel="stylesheet" href="{{url(mix('css/style.min.css'))}}">

    {{--React--}}
    <link href="{{ env('APP_URL') }}" id="react-base" rel="base"/>
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
</head>
@include('home.header')
@include('home.banner')
@include('home.service')


<body>
<div class='initial'>
    <img class="initial-bg" src="{{url(mix('images/background.jpg'))}}" alt="Diretriz">
    @yield('header')
    @yield('banner')
</div>
@yield('service')


<script src="{{ url(mix('js/libary.min.js')) }}"></script>
<script src="{{ url(mix('js/script.min.js')) }}"></script>
<script src="https://kit.fontawesome.com/ada19db140.js" crossorigin="anonymous"></script>
</body>
</html>
