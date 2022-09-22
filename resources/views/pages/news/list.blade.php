@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema news-list">
        <div class="header-system">
            <div class="container d-flex flex-column py-3">
                <h1 class="title-section">Nóticias</h1>
                <p class="fs-7">Notícias / <span class="text-success fw-bold">Lista</span></p>
            </div>
        </div>
        <div class="content py-4" style="background: #E4EDF3">
            <div class="container d-flex align-items-start flex-wrap flex-xl-nowrap py-3">
                <div class="items d-flex flex-wrap justify-content-center justify-content-lg-start">
                    @empty(!$news)
                        @foreach($news as $item)
                            <x-news image="{{(empty($item->capa) ? url(mix('images/news.jpg')) : $item->capa)}}"
                                    autor="{{$item->usuario}}"
                                    title="{{$item->assunto}}"
                                    link="{{$item->link}}"
                                    data="{{$item->data}}"/>
                        @endforeach
                    @endempty
                </div>

                {{--Categorias--}}
                @empty(!$categoria)
                    <div class="categoria px-3">
                        <p class="mb-2">Lista de categorias</p>
                        <ul class="list-group w-100">
                            <li class="list-group-item"><a class="text-success"
                                                           href="{{route('noticias-list', ['categoria' => 999])}}"><i class="bi bi-newspaper me-1"></i>Boletim Informativo</a></li>
                            @foreach($categoria as $item)
                                <li class="list-group-item"><a class="text-success"
                                                               href="{{route('noticias-list', ['categoria' => $item->idcategoria])}}"><i class="bi bi-newspaper me-1"></i>{{$item->nome}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endempty
            </div>
        </div>
    </div>
@endsection
