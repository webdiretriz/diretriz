@section('header')
    {{--Responsivo--}}
    <div class="w-100 d-flex d-xl-none justify-content-between align-items-center p-3 px-4">
        <img src="{{url(mix('images/logo-light.png'))}}"
             style="width: 180px"
             alt="Logo">
        <a href="#" id="j_menu"><i class="bi bi-layout-text-sidebar-reverse text-success fs-3"></i></a>
    </div>

    {{--Cabeçalho--}}
    <header class="header animate__animated">
        <div class="container d-flex flex-wrap flex-xl-nowrap justify-content-between align-items-center">
            <img src="{{url(mix('images/logo-light.png'))}}"
                 style="width: 180px"
                 class="d-none d-xl-block"
                 alt="Logo">
            <a href="#" id="j_menu" class="w-100 d-xl-none m-3 mb-0 text-end"><i class="bi bi-x-circle fs-2 text-success"></i></a>
            <div class="d-flex flex-column flex-wrap
                    flex-xl-row flex-xl-nowrap align-items-center" style="height: 100%">

                {{--Links--}}
                <ul class="links flex-column flex-xl-row mt-0 mt-xl-3">
                    <li><a href="{{route('home')}}" data-dropdown="0" class="text-success">Home</a></li>
                    <li>
                        <a id="j_dropdown" data-dropdown="1" href="#">Soluções</a>
                        <ul id="j_dropdown-link" data-dropdown="1" class="dropdown-link" style="min-width: 305px;">
                            <li class="text-success mb-2 fs-7">Pública</li>
                            <li><a href="{{route('imaq')}}"><i class="fas fa-tv me-1"></i>iMaq</a></li>
                            <li><a href="{{route('legislador')}}"><i class="fas fa-tv me-1"></i>Legislador</a></li>
                            <li><a href="{{route('terra')}}"><i class="fas fa-tv me-1"></i>Terra</a></li>
                            <li class="text-success my-2 mt-3 fs-7">Empresarial</li>
                            <li><a href="{{route('gestao-rh')}}"><i class="fas fa-users me-1"></i>HCM (Gestão de Pessoas , RH)</a></li>
                            <li><a href="{{route('seguranca')}}"><i class="fas fa-users me-1"></i>RONDA (Gestão de Acesso e Segurança)</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="j_dropdown" data-dropdown="2" href="#">Área do Cliente</a>
                        <ul id="j_dropdown-link" data-dropdown="2" class="dropdown-link" style="min-width: 210px;">
                            <li><a href="https://diretriz.net/suporte/" target="_blank"><i class="fas fa-headset me-1"></i>Suporte</a></li>
                            <li><a href="{{route('acesso-remoto')}}"><i class="fas fa-house-laptop me-1"></i>Conexão remota</a></li>
                            <li><a href="{{route('downloads')}}"><i class="fas fa-download me-1"></i>Downloads</a></li>
                            <li><a href="https://imaq.diretriz.net/" target="_blank"><i class="fas fa-tv me-1"></i>i.Maq Web (Aquisição)</a></li>
                        </ul>
                    </li>
                    <li><a data-dropdown="0" id="j_scrollNav" href="#news">Notícias</a></li>
                    <li><a data-dropdown="0" id="j_scrollNav" href="#contact">Contato</a></li>
                    <li><a data-dropdown="0" id="j_scrollNav" class="text-success" href="#diretriz">A Diretriz</a></li>
                </ul>

                {{--Informação--}}
                <div
                    class="info d-none d-xl-flex py-3 px-4 align-items-center flex-row">
                    <a href="https://webmail-seguro.com.br/diretriz.net/"
                       target="_blank"
                       class='fs-6 text-success'><i class="bi bi-envelope me-1"></i>Webmail</a>
                    <a href="https://www.diretriz.net/crm/login/"
                       target="_blank"
                       class='fs-6 ms-0 ms-xl-3 text-success'><i class="bi bi-tv me-1"></i>CRM</a>
                    <div class="ms-0 ms-xl-3">
                        <p class='fs-6'><i class="bi bi-telephone me-1"></i>Contato</p>
                        <p class='fs-7'>(35) 2105-3105</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
