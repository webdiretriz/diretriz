@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Downloads</h1>
                <p class="fs-8">Área do cliente / <span class="text-success fw-bold">Downloads</span></p>
            </div>
        </div>
        <div class="content py-4" style="background: #E4EDF3">
            <div class="container p-3 fs-7 d-flex flex-wrap justify-content-center pb-5">
                <div class="w-75" style="min-height: 300px">
                    <p class="mb-3"><i class="fas fa-download me-2 fs-4"></i>Lista de arquivos para downloads</p>
                    {!!$files!!}
                </div>
            </div>
        </div>
    </div>
@endsection
