@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Terra</h1>
                <p class="fs-8">Soluções / <span class="text-success fw-bold">Terra</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 fs-7">
                <article>
                    <h2 class="title-section fs-3">Terra</h2>
                    <p>Facilite a organização do recebimento de tributos pago ao município. Permite total eficiência no
                        acompanhamento de todo o processo, desde o lançamento até seu pagamento. Além disso, o sistema
                        Terra possui vários outros módulos que o faz ainda mais completo.</p>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>1</span>
                            <h3 class="title fs-7">Tributos</h3>
                            <p>O sistema Terra Tributos propõe maior competência e produtividade no gerenciamento do
                                setor Tributário Municipal, gerenciando o lançamento e a cobrança de tributos
                                municipais, permitindo o acompanhamento de cada tributo lançado até a sua efetiva
                                quitação.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>2</span>
                            <h3 class="title fs-7">ISS</h3>
                            <p>Auxilia os fiscais municipais no processo de fiscalização de ISS, de forma que todas as declarações efetuadas pelas empresas, tomadores e prestadores de serviços sejam rigorosamente fiscalizadas, de forma rápida e ágil.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <h3 class="title fs-7">Obras e planejamento</h3>
                            <p>Fornece o controle de todos os Processos de Obras e Planejamentos Urbanos da Prefeitura, gerenciando os requerimentos de obra e gerando as devidas taxas e imposições que a lei do município prevê.</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-eye"></i> Nota Fiscal Eletrônica</h2>
                    <div class="d-flex flex-wrap mb-3">
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-plugin fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Controle</h3>
                                <p class="w-100">a emissão de suas Notas Fiscais Eletrônicas de Serviço.</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-check fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Facilite</h3>
                                <p class="w-100">o envio de informações para a Fazenda Municipal e integrando os sistemas das Empresas com o sistema da Prefeitura</p>
                            </div>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
