@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Sistema i.Maq</h1>
                <p class="fs-7 mt-2"><i class="bi bi-git me-1"></i>Sistema na versão 8.4.0</p>
                <p class="fs-8">Soluções / <span class="text-success fw-bold">i.Maq</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 fs-7">
                <article>
                    <h2 class="title-section fs-3">i.Maq</h2>
                    <p>i.Maq é um sistema completo para a área de Controladoria Municipal. Nosso sistema já esta
                        adequado
                        com a <b>Nova Contabilidade Pública - PCASP</b>. Trazendo todas as alterações necessárias para a
                        elaboração
                        e execução do orçamento, possibilitando a geração de relatórios exigidos pelos Tribunais de
                        Contas
                        Estadual e União. Possui uma ampla ferramenta para exportação de arquivos para Prestação de
                        Contas
                        para o TCU e TCE</p>
                    <div class="d-flex flex-wrap mt-4">
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>1</span>
                            <h3 class="title fs-7">Elabore orçamento</h3>
                            <p>Anual (LOA), Plurianual (PPA), Diretriz Orçamentárias (LDO)</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Gerenciamento</h3>
                            <p>Receita e a Despesa (Orçamentárias e Extraorçamentária) Gestão Orçamentária, Extra
                                Orçamentária e Tesouraria</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <h3 class="title fs-7">Planejamento</h3>
                            <p>Despesas e Receitas</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>4</span>
                            <h3 class="title fs-7">Resultados</h3>
                            <p>Prestação de Contas, Consolidação Contábil, Apuração de Resultado, Controle Interno</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>5</span>
                            <h3 class="title fs-7">Emita</h3>
                            <p>SICOM, TCE-MG, LRF</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>6</span>
                            <h3 class="title fs-7">Acompanhe</h3>
                            <p>Cotas de Despesas, Gráficos Gerencias e Fluxo de Caixa</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-bag-check"></i> Compras</h2>
                    <p>O sistema gerencia as compras públicas atendendo as normatizações vigentes. Possui total
                        integração
                        com a Gestão orçamentária, tendo em seu conteúdo a realização de procedimentos licitatórios,
                        onde o
                        gerenciador terá um maior controle e transparência sobre os gastos do órgão. Em seu diferencial
                        possui abas que foram elaboradas de acordo com o sequencial exigido pela Lei 8.666/93.</p>
                    <div class="d-flex flex-wrap">
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-pc-display fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Elabore</h3>
                                <p>solicitações de compras, licitações, pregões, leilões</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-cash fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Cote</h3>
                                <p class="w-100">preços</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-file-earmark-text fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Crie</h3>
                                <p class="w-100">editais, processos e compras diretas</p>
                            </div>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3 mt-5"><i class="bi bi-box"></i> Almoxarifado</h2>
                    <p>Controlar, coordenação e gestão dos processos de almoxarifado dos órgãos, com controle de
                        movimentações do almoxarifado tanto físico como virtual, com gestão através de inventários,
                        curva ABC e ponto de equilíbrio. Além de possuir relatórios gerenciais para controle do
                        almoxarifado e total integração com os sistemas de compras e contabilidade</p>
                    <div class="d-flex flex-wrap">
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-bell fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Gerencie</h3>
                                <p class="w-100">Seu estoque de uma forma eficiente</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-bezier2 fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Controle</h3>
                                <p class="w-100">seu Almoxarifado por órgão</p>
                            </div>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3 mt-5"><i class="bi bi-car-front"></i> Frotas</h2>
                    <p>Controle de transporte e quilometragem das requisições de material e serviço, além de possuir
                        outras ferramentas que atuam de modo a garantir a qualidade do serviço prestado.</p>
                    <div class="d-flex flex-wrap">
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-cash-coin fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Cadastre</h3>
                                <p class="w-100">sua frota e mantenha em dia suas manutenções</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 60px; height: 48px"><i class="bi bi-archive fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Economize</h3>
                                <p class="w-100">com controle de combustível, peças e controle de circulação</p>
                            </div>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3 mt-5"><i class="bi bi-house"></i> Patrimônio</h2>
                    <p>O módulo Patrimônio permite à gestão pública realizar o controle de bens, sendo totalmente integrado com a Gestão Orçamentária.</p>
                    <div class="d-flex flex-wrap">
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-cash-coin fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Total controle</h3>
                                <p class="w-100">Dos seus bens</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-plugin fs-3 text-success"></i></span>
                            <div class="fs-7 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Integre</h3>
                                <p class="w-100">com o Gestão Orçamentária</p>
                            </div>
                        </article>
                    </div>
                </article>
                <article>
                    <h3 class="title-section mt-4">MunicipalNET</h3>
                    <ul class="mt-3">
                        <li class="mt-1">Portal Transparência</li>
                        <li class="mt-1">Contas Públicas - TCU</li>
                        <li class="mt-1">Movimento Econômico</li>
                        <li class="mt-1">Lei Acesso à Informação</li>
                        <li class="mt-1">RFB - DETRAN - TCE</li>
                        <li class="mt-1">Cotação de Preços</li>
                    </ul>
                    <div class="d-flex flex-wrap mt-4">
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>1</span>
                            <h3 class="title fs-7">Portal da Transparência</h3>
                            <p>a prestação de contas é um dever dos gestores do poder público, e o acesso às mesmas é um direito do cidadão</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Contas Públicas</h3>
                            <p>garanta a transparência dos seus recursos</p>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
