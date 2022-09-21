@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Conexão Remota</h1>
                <p class="fs-8">Área do cliente / <span class="text-success fw-bold">Conexão remota</span></p>
            </div>
        </div>
        <div class="content py-4" style="background: #E4EDF3">
            <div class="container p-3 fs-7 d-flex justify-content-center pb-5">
                <div class="w-75 my-4" style="width: 18rem;">
                    <div class="card-body d-flex align-items-center flex-column">
                        <h5 class="card-title mb-3 fw-bold">Suporte Diretriz via AnyDesk</h5>
                        <img style="width: 100px" class="mb-3" src="{{url(mix('images/anydesk.png'))}}" alt="AnyDesk"/>
                        <p class="card-text mt-2">Realize o download da aplicação e informe o ID para o conexão remota:</p>
                        <a href="https://get.anydesk.com/eiB2xewN/AnyDesk_Client.exe" class="btn btn-success text-white mt-3">Faça Download</a>
                        <p class="fs-8 mt-2">Copyright © {{date('Y')}} AnyDesk Software GmbH.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
