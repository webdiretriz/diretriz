@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Termo de Consentimento - Processo Seletivo</h1>
                <p class="fs-8">LGPD / <span class="text-success fw-bold">Consentimento</span></p>
            </div>
        </div>
        <div class="content d-flex justify-content-center flex-wrap" style="background: #E4EDF3">
            <div class="container p-3 pt-5 fs-7">
                <p class="mb-2">A DIRETRIZ INFORMATICA EIRELI, inscrita no CNPJ sob o n° 22.493.902/0001-40 e a DEDICCAR
                    SOLUÇÕEES INTELIGENTES, inscrita no CNPJ sob o n° 36.093.172/0001-02 INFORMAM que precisam coletar
                    dados pessoais para permitirem que você participe do processo de candidatura a vagas divulgadas
                    pelas empresas. Se você não fornecer as informações solicitadas, não poderá participar do
                    processo.</p>
                <p class="mb-2">Nós e nossos provedores de serviços coletamos os dados pessoais de várias maneiras,
                    incluindo os meios físicos e eletrônicos. Utilizamos os dados pessoais para nossos interesses
                    comerciais legítimos, tais como recursos humanos e gestão de equipe.</p>
                <p class="mb-2">Também usaremos e divulgaremos seus dados pessoais se você tiver optado por isso ou se
                    for necessário/apropriado, especialmente para se candidatar a futuras novas vagas, para o
                    identificarmos como candidato em potencial para futuras oportunidades de trabalho dentro da sua
                    preferência e interesse, e entraremos em contato para informá-lo sobre esses cargos. Reteremos seus
                    dados pessoais pelo período de 1 (um) ano conforme nossa Política Interna de Proteção de Dados e
                    Segurança da Informação.</p>
                <p class="mb-2">A empresa ainda afirma veementemente seu compromisso com o fiel cumprimento da Lei Geral
                    de Proteção de Dados e LGPD, no que se refere ao tratamento e segurança dos dados coletados. As
                    empresas, porém, não estão autorizadas a modificarem informções sem autorização prévia, e nem as
                    utilizar ou repassá-las a terceiros, de qualquer forma além do estritamente necessário para a
                    manutenção e segurança.</p>
                <p class="font-weight-bold">De acordo com as condições descritas acima, condizentes com a política de
                    tratamento de dados da DIRETRIZ e DEDICCAR, autorizo o uso de meus dados com a finalidade de
                    participar de processos seletivos. Declaro estar ciente de que o tratamento destes dados poderá ser
                    realizado no prazo de um ano da data desta autorização. </p>
            </div>
            <form action="{{route("lgpd.consentimento.send")}}" method="post"
                  class='w-75 d-flex pb-5 flex-wrap justify-content-start'>
                <div class="form-group col-md-6 px-2">
                    <label>Nome:</label>
                    <input type="text" name="nome" value="" class="form-control" placeholder="Nome" required/>
                    <div id="j_feedback"></div>
                </div>
                <div class="form-group col-md-6 px-2">
                    <label>E-mail:</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Email" required/>
                    <div id="j_feedback"></div>
                </div>
                <button class="btn fs-6 text-dark btn-success mt-3 mx-2"
                        id="j_action"><i class="fas fa-save me-1"></i>Autorizar
                </button>
            </form>
        </div>
    </div>
@endsection
