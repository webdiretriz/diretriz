@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">RONDA (Gestão de Acesso e Segurança)</h1>
                <p class="fs-8">Soluções / <span
                        class="text-success fw-bold">RONDA (Gestão de Acesso e Segurança)</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 fs-7">
                <article>
                    <h2 class="title-section fs-3">Gestão de Acesso e Segurança</h2>
                    <p>A solução Gestão de Acesso e Segurança oferece alta tecnologia em sistemas aliada a equipamentos
                        de última geração, integrando todas as rotinas de acesso e segurança de uma empresa em única
                        aplicação. É ideal para proporcionar tranquilidade às atividades diárias da sua empresa. O
                        software é compatível com qualquer projeto de gerenciamento de segurança, garantindo proteção
                        pessoal e patrimonial a todas as empresas, independentemente do segmento de atuação.</p>
                    <h3 class="title-section fs-4 mt-3"><i class="bi bi-check-all me-1"></i>Áreas da Solução</h3>
                    <p>O software Gestão de Acesso e Segurança integra procedimentos de segurança e controle de acesso e
                        patrimônio das empresas. São quatro áreas que atendem desde rotinas de vigilância eletrônica até
                        a administração de portarias..</p>
                    <div class="mt-4 mb-4"
                         style="max-width: 500px; border-radius: 8px; height: 300px; border: 5px solid #5ACD81;">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qmJ84ckXW7k" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen=""></iframe>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
