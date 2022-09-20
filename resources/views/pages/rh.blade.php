@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">HCM (Gestão de Pessoas , RH)</h1>
                <p class="fs-8">Soluções / <span class="text-success fw-bold">HCM (Gestão de Pessoas , RH)</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 fs-7">
                <article>
                    <h2 class="title-section fs-3">Gestão de Pessoas</h2>
                    <p>Gerenciar o capital humano da sua empresa é uma tarefa muito importante. E com a solução Gestão
                        de Pessoas, esta área tem atenção especial. O software é ideal para a descentralização do RH,
                        pois deixa as informações acessíveis aos colaboradores em tempo real. Flexível, a solução pode
                        ser usada em organizações de todos os portes e segmentos. Acompanhamos as mudanças na legislação
                        e disponibilizamos alterações no sistema para assegurar que os clientes fiquem em dia com as
                        obrigações legais.</p>
                    <h3 class="title-section fs-4 mt-3"><i class="bi bi-check-all me-1"></i>Áreas da Solução</h3>
                    <p>A solução Gestão de Pessoas é dividida em seis áreas ? Relações Trabalhistas, Remuneração,
                        Desenvolvimento Organizacional, Qualidade de Vida, Especializações e Documentos Eletrônicos ?
                        que compreendem as operações rotineiras dos RHs e as atividades estratégicas. As áreas são
                        subdividias em módulos que proporcionam às empresas a utilização de soluções adequadas às suas
                        atividades.</p>
                    <div class="d-flex flex-wrap mb-3">
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-file-earmark-text fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Relações Trabalhistas</h3>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-cash-coin fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Remuneração</h3>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-people fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Desenvolvimento Organizacional</h3>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i class="bi bi-heart fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Qualidade de vida</h3>
                            </div>
                        </article>
                        <article class="d-flex align-items-center col-12 col-md-4 mt-3">
                        <span class="bg-light d-flex justify-content-center align-items-center rounded"
                              style="width: 48px; height: 48px"><i
                                class="bi bi-cash-stack fs-3 text-success"></i></span>
                            <div class="fs-7 w-75 d-flex px-2 flex-wrap align-items-center">
                                <h3 class="m-0 text-success fw-bold fs-5">Especializações</h3>
                            </div>
                        </article>
                    </div>
                    <div class="mt-5"
                         style="max-width: 500px; border-radius: 8px; height: 300px; border: 5px solid #5ACD81;">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KTJDgOWVi7E"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen=""></iframe>
                    </div>
                </article>
                <article>
                    <h3 class="title-section fs-4 mt-5"><i class="bi bi-check-all me-1"></i>Gestão Empresarial GO UP
                    </h3>
                    <p>Pequenas e médias empresas são diferentes das grandes companhias, mas podem contar com os mesmos
                        benefícios da automatização dos processos administrativos. Para isso, oferecemos o Gestão
                        Empresarial | GO UP, uma solução completa que apoia a gestão do seu negócio e ainda conta com a
                        experiência de mais de 20 anos da Senior em ERP. É um sistema completo, de baixo custo e de
                        fácil utilização. Sua empresa ganha velocidade e competitividade, já que com o GO UP o tempo de
                        execução das atividades diminui e a produtividade aumenta. Um jeito simples de conquistar
                        resultados rápidos e alcançar o sucesso.</p>
                    <h3 class="title-section fs-4 mt-5"><i class="bi bi-check-all me-1"></i>Áreas da Solução</h3>
                    <p>A solução Gestão Empresarial | GO UP é dividida em seis áreas: Finanças, Controladoria,
                        Manufatura, Mercado, Suprimentos e Documentos Eletrônicos . As áreas se subdividem em módulos
                        especializados para garantir o controle total de forma segura e simples. O software Gestão
                        Empresarial | GO UP é voltado a pequenas e médias empresas que buscam integrar todos os setores,
                        como mercado, finanças, controladoria e suprimentos, com o compartilhamento de dados em apenas
                        um local. O GO UP permite que você tenha um planejamento operacional transparente, estruturado e
                        com responsabilidades definidas.</p>
                    <p class="fw-bold mt-3">Melhor desempenho</p>
                    <p>Otimize processos, controle custos, melhore o gerenciamento do relacionamento com os clientes e
                        com os fornecedores. Tenha informações rápidas e confiáveis para agilizar a tomada de decisões
                        com a solução Gestão Empresarial | GO UP.</p>
                    <p class="mt-3 fw-bold">Preparada para as demandas da manufatura</p>
                    <p>De forma simples e ágil, unifica os processos integrando desde a engenharia,
                        PCP, passando pelo chão de fábrica, até a entrega do produto no depósito de expedição para
                        faturamento. O sistema ainda atende de forma nativa e automática todas as demandas impostas pelo
                        governo para entrega do bloco K ?sped produção?.</p>
                    <p class="mt-3 fw-bold">Também na nuvem</p>
                    <p>Para sua empresa crescer com flexibilidade e ainda mais segurança, invista na solução em cloud
                        computing. Torne seu negócio mais inovador sem custos adicionais em infraestrutura de TI. Sempre
                        acessível. Sempre eficiente</p>
                    <h3 class="title-section fs-4 mt-3"><i class="bi bi-check-all me-1"></i>Vantagens</h3>
                    <div class="d-flex flex-wrap mt-4">
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>1</span>
                            <p>Baixo Investimento na aquisição e manutenção</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>2</span>
                            <p>Implantação ágil e baseada nas melhores práticas de mercado internacionais (PMI)</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>3</span>
                            <p>Organização da Gestão com processos pré-definidos</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>4</span>
                            <p>(BPM)Solução objetiva com reflexo rápido nos resultado</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>5</span>
                            <p>Escopo definido e rotinas pré-configurada</p>
                        </article>
                        <article class="step-item col-12 col-6 col-md-4 py-4">
                            <span>6</span>
                            <p>Mecanismos anti-erros na entrada de dados</p>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
