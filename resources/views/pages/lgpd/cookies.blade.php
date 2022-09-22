@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Políticas de Cookies</h1>
                <p class="fs-8">LGPD / <span class="text-success fw-bold">Cookies</span></p>
            </div>
        </div>
        <div class="content" style="background: #E4EDF3">
            <div class="container p-3 pb-5 fs-7">
                <article class="mt-3">
                    <h2 class="title-section fs-3">O que são cookies?</h2>
                    <p>Como é prática comum em quase todos os sites profissionais, o site da DIRETRIZ usa cookies, que
                        são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página
                        descreve quais informações eles coletam, como as usamos e por que às vezes precisamos armazenar
                        esses cookies.
                        Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto,
                        isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p>
                </article>
                <article class="mt-3">
                    <h2 class="title-section fs-3">Como usamos os cookies?</h2>
                    <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não
                        existem opções padrão do setor para desativar os cookies sem desativar completamente a
                        funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos
                        os cookies se não tiver certeza se precisa ou não deles, caso sejam usados para fornecer um
                        serviço que você usa.</p>
                </article>
                <article class="mt-3">
                    <h2 class="title-section fs-3">Desativar cookies</h2>
                    <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte
                        a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies
                        afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de
                        cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste
                        site. Portanto, é recomendável que você não desative os cookies.</p>
                </article>
                <article class="mt-3">
                    <h2 class="title-section fs-3">1. Cookies Essenciais</h2>
                    <p>São cookies essenciais a funcionamento do site, relacionado a recursos efetivamente do próprio
                        site, não tendo relação com coleta ou compartilhamento de dados dos acessos do site para fins de
                        marketing/comerciais;
                        Estes cookies são obrigatórios e sua desmarcação não é possível.</p>
                </article>
                <article class="mt-3">
                    <h2 class="title-section fs-3">2. Cookies Analíticos</h2>
                    <p>Cookies para monitorar o uso do site em relação a performance, melhoria de experiência no uso do
                        site, permitindo identificação de falhas e destaque de serviços mais acessados aos usuários;
                        Estes cookies não são utilizados para coletar dados de caráter pessoal;
                        Este tipo de cookie é opcional, ou seja, o usuário deverá ter a possibilidade de desmarcar,
                        desabilitando a função deste cookie.</p>
                    <span class="text-danger fw-bold">Não utilizamos esse tipo de cookie</span>
                </article>
                <p class="w-100 text-center" style="font-size: 1.1em;">Conheça também a nossa <a class="font-weight-bold" href="{{route('lgpd.politica')}}">Políticas de Privacidade</a></p>
            </div>
        </div>
    </div>
@endsection
