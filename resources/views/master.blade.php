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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css"/>

    {{--React--}}
    <link href="{{ env('APP_URL') }}" id="react-base" rel="base"/>
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@yield('pages')
@yield('service')
@yield('about')
@yield('client')
@yield('news')
@yield('contact')
@yield('footer')

{{--Scroll--}}
<div class="backTop d-none animate__animated">
    <i class="bi bi-chevron-double-up fs-2 text-success"></i>
</div>

{{--LGPD--}}
@if(!isset($_COOKIE['cookie_notice_accepted']))
    <div class="lgpd text-white">
        <div class="container d-flex align-items-center">
            <p class="fs-7">Utilizamos cookies essenciais para o funcionamento do site. Contudo disponibilizamos a nossa
                <a class="text-success" href="{{route('lgpd.cookies')}}">Política de Cookies</a> para você entender
                melhor a usabilidade.</p>
            <a class="ms-3 py-1 btn btn-success rounded-pill px-3" href="{{route('lgpd.aceitar')}}">Aceitar</a>
        </div>
    </div>
@endif
<script src="{{ url(mix('js/libary.min.js')) }}"></script>
<script src="{{ url(mix('js/script.min.js')) }}"></script>
<script src="https://kit.fontawesome.com/ada19db140.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
</body>
</html>
