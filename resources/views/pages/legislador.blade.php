@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Legislador</h1>
                <p class="fs-8">Soluções / <span class="text-success fw-bold">Legislador</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 fs-7">
                <article>
                    <h2 class="title-section fs-3">Legislador</h2>
                    <p>Sistema de gestão ao apoio Legislativo para Câmaras Municipais e Assembleias Legislativas.</p>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>1</span>
                            <h3 class="title fs-7">Agilidade</h3>
                            <p>Localização rápida de documentos, controle de tramitação na casa legislativa, facilidade
                                de edição e acesso da digitalização.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>2</span>
                            <h3 class="title fs-7">Eficiência</h3>
                            <p>A informatização das atividades do apoio ao legislativo também abrange o protocolo de
                                documentos que dão entrada na Câmara, com controle de respostas o registro de ofícios,
                                pronunciamentos, frequência, projetos, proposituras e outros atos de competências.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <h3 class="title fs-7">Redução do fluxo de papéiss</h3>
                            <p>Por meio do módulo Gabinete, onde as solicitações de proposituras são feitas via sistema,
                                e da digitalização de documentos e resposta do executivo, dentre outras rotinas.</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-bank"></i> Legislador Executivo</h2>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>1</span>
                            <h3 class="title fs-7">Confiabilidade</h3>
                            <p>Consultas precisas e consistentes da legislação municipal, partindo da lei original e
                                seguida por toda lei que a tenha alterado ou revogado. Tem-se ainda a possibilidade de
                                consolidação do texto das leis, obtendo-se a integração e vinculação entre os atos
                                originais e suas alterações..</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Integração</h3>
                            <p>O sistema pode ser utilizado de forma integrada ou separadamente. Sua integração com o
                                Legislador permite o reaproveitamento das informações de projetos, leis e outros
                                documentos..</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <h3 class="title fs-7">Eficiência</h3>
                            <p>A informatização das atividades do apoio ao legistlativo também abrange, o protocolo de
                                documentos que dão entrada na Câmara, com controle de respostas, o registro de ofícios,
                                pronunciamentos, frequência, projetos, proposituras, e outros atos de competência do
                                legislativo..</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-globe"></i> Legislador Web</h2>
                    <p>Possibilita a divulgação das informações dos sistemas Legislador na internet</p>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>1</span>
                            <h3 class="title fs-7">Internet</h3>
                            <p>Transparência e tecnologia a seu serviço! As informações dos sistemas podem ser
                                consultadas disponibilizadas na internet por meio de exportação direta.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Transparência</h3>
                            <p>As informações são disponibilizadas tanto no site da entidade como também no site da
                                Lance.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <h3 class="title fs-7">Publicidade</h3>
                            <p>Disponibiliza automaticamente o trabalho dos legisladores na internet.</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-globe"></i> Legislador Portal</h2>
                    <p>Sistema para criação e edição de websites para Câmaras Municipais, proporcionando agilidade e
                        autonomia para o usuário na atualização das informações. Site estruturado, voltado à informação
                        e o conteúdo legislativo, envolvendo à disponibilização de informações variadas, além de
                        serviços online</p>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>1</span>
                            <h3 class="title fs-7">Transparência</h3>
                            <p>As informações são disponibilizadas tanto no site da entidade e também no site da
                                Lancer.</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Publicidade</h3>
                            <p>Disponibiliza automaticamente o trabalho dos legisladores na internet.</p>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-eye"></i> Legislador Ao vivo</h2>
                    <p>Sistema de gravação audiovisual da sessão plenária, com transmissão ao vivo pela internet.</p>
                    <div class="d-flex flex-wrap">
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-plugin fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">Auxilia a confeção da ata da sessão, pela faclidade de utilização da
                                    gravação separada por títulos e, ainda, pela praticidade de variar a velocidade de
                                    visualização, que agiliza o acompanhamento e registro da palavra livre e
                                    pronunciamento.</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-wifi fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">Facilita e agiliza as filmagens das sessões plenárias, controlando via
                                    sistema, a seleção de câmeras e inserção de logotipos e textos. Possibilita ainda, a
                                    utilização de qualquer vídeo ou imagem durante a transmissão.</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-command fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">Possibilidade a localização e o acesso rápido, pela internet ou
                                    localente das gravações audiovisual, permitindo pesquisar por título, fase da
                                    sessão, pronunciamento, nome do orador, discurso etc.</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-file-earmark-text fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">Cópia da sessão e dos pronunciamentos poderão ser disponibilizados em
                                    mídia (CD, DVD, pendrive)</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-cpu-fill fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">O pronunciamento e a palavra livre registrados no Legislador ao Vivo
                                    são atualizados automaticamente no sistema Legislador, integrando o texto da ata da
                                    sessão.</p>
                            </div>
                        </article>
                        <article class="d-flex align-items-start col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-camera fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <p class="w-100">O legislador ao Vivo possibilita a separação e indexação da gravação
                                    audiovisual por
                                    título, orador, discurso, fase da sessão etc.</p>
                            </div>
                        </article>
                    </div>
                </article>
                <article>
                    <h2 class="title-section fs-3"><i class="bi bi-globe"></i> Legislador Plenário</h2>
                    <p>Sistema de gestão que controla a votação eletrônica e frequência, gerencia o tempo de
                        pronunciamento e fornece documentação digital</p>
                    <div class="d-flex flex-wrap mt-5">
                        <article class="step-item col-12 col-6 col-md-4 py-4 px-2">
                            <span>1</span>
                            <h3 class="title fs-7">Modernize o Plenário</h3>
                            <p>Ferramento indispensavel na informatização das atividades no plenário, é uma solucão que
                                agiliza e viabiliza uma perfeita organização das sessões</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <h3 class="title fs-7">Elimine o papel</h3>
                            <p>O sistema conecta os legisladores a tecnologia da informação, durante a sessão plenária, permitindo que utilizando um computador, notebook ou tablet, o parlamentar confirme sua presença, proceda às votações e acessa a documentação, dispensando assim o papel.</p>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
