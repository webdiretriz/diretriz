@section('header')
<header class="header">
    <div class="container d-flex justify-content-between align-items-center" style="height: 80px">
        <img src="{{url(mix('images/logo-light.png'))}}"
             style="width: 180px"
             alt="Logo">
        <div class="d-flex align-items-center" style="height: 100%">
            <ul class="links mt-3">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Soluções</a></li>
                <li><a href="#">Área do Cliente</a></li>
                <li><a href="#news">Notícias</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a class="text-success" href="#diretriz">A Diretriz</a></li>
            </ul>
            <div class="info py-3 px-4 d-flex align-items-center">
                <a href="https://webmail-seguro.com.br/diretriz.net/"
                   target="_blank"
                   class='fs-6 text-success'><i class="bi bi-envelope me-1"></i>Webmail</a>
                <a href="https://www.diretriz.net/crm/login/"
                   target="_blank"
                   class='fs-6 ms-3 text-success'><i class="bi bi-tv me-1"></i>CRM</a>
                <div class="ms-3">
                    <p class='fs-6 text-white'><i class="bi bi-telephone me-1"></i>Contato</p>
                    <p class='fs-7 text-white'>(35) 2105-3105</p>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
