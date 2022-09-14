@section('client')
    <article class="client" style="background: #1C1E22">
        <div class="container py-5">
            <h1 class='title-section text-white fs-3'>Temos a confiança de mais de 5.000 clientes satisfeitos em todo o
                Brasil!</h1>
            <div class="w-100 d-flex align-items-center justify-content-center">
                <img src="{{url(mix('images/mapa.png'))}}" alt="mapa">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <x-client image="cliente-1"
                               title="Cliente"/>
                    <x-client image="cliente-2"
                               title="Cliente"/>
                    <x-client image="cliente-3"
                               title="Cliente"/>
                    <x-client image="cliente-4"
                               title="Cliente"/>
                    <x-client image="cliente-5"
                               title="Cliente"/>
                    <x-client image="cliente-6"
                              title="Cliente"/>
                </div>
            </div>
        </div>
    </article>
@endsection
