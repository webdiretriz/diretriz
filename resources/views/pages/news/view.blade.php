@php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); @endphp
@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column py-3">
                <h1 class="title-section">{{$news->assunto}}</h1>
                <p class="text-gray">Publicado em {{ strftime("%A, %d de %B de %Y", strtotime($news->data))}}</p>
                <p class="fs-7">Notícias / <span class="text-success fw-bold">
                        <a class="text-success" href="{{route('noticias-list', ['categoria' => $news->idcategoria])}}">{{$news->nome}}</a></span></p>
            </div>
        </div>
        <div class="content py-4" style="background: #E4EDF3; min-height: 370px">
            <div class="container py-3">
                {!! $news->mensagem !!}
            </div>
        </div>
    </div>
@endsection
