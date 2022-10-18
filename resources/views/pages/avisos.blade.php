@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Quadro de avisos</h1>
                <p class="fs-8">Área pública / <span class="text-success fw-bold">Quadro de avisos</span></p>
            </div>
        </div>
        <div class="w-100 bg-white p-4">
            <div class="container d-flex flex-wrap align-items-baseline" style="min-height: 370px">
                <div class='w-100 d-flex flex-wrap'>
                    <h1 class="fs-6"><i class="bi bi-newspaper fs-4 me-2"></i>Últimas avisos</h1>
                    @if($avisos->isEmpty())
                        <p class="w-100 mt-4 fs-4 fw-light" style="color: #ccc">
                            <i class="fas fa-sad-cry me-2"></i>Não temos nenhum aviso para você, volte mais tarde!</p>
                    @else
                        <div class="w-100 d-flex flex-wrap">
                            @foreach($avisos as $item)
                                <div class="aviso">
                                    <span class="marker">{{$item->titulo}}</span>
                                    <p class="marker-subtitle {{empty($item->subtitulo) ? 'd-none' : ''}}">{{$item->subtitulo}}</p>
                                    <img style="max-width: 100%"
                                         src="{{url('/avisos') . '/' .  $item->imagem}}"
                                         alt="Image">
                                    <div class='aviso-btn {{empty($item->link) ? 'd-none' : ''}}'>
                                        <x-button type="normal"
                                                  color="success"
                                                  link="{{$item->link}}"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
