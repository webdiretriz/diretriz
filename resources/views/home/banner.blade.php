@section('banner')
    <div class="banner">
        <div class="container links d-flex align-items-center justify-content-center flex-column"
             style="height: 100%;">
            <h1 class="fw-bold fs-5 text-uppercase text-success">Nosso propósito</h1>
            <p class="fw-bold title text-uppercase text-center">" Direcionar conhecimento e
                tecnologia para transformar
                pessoas."</p>
            <div class='d-flex flex-wrap'>
                <a href="#news"
                   class="btn bg-success position-relative text-uppercase
                      fs-7 fw-bold px-4 py-2 mt-4">Descubra mais</a>
                @if($destaque > 0)
                    <a href="{{route('quadro-aviso')}}"
                       class="btn bg-success position-relative text-uppercase
                      fs-7 fw-bold px-4 ms-4 py-2 mt-4 destaque">Quadro de avisos</a>
                @endif
            </div>
        </div>
    </div>
@endsection
