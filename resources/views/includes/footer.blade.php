@section('footer')
    <footer class="bg-primary">
        <div class="container p-4 d-flex justify-content-center align-items-center flex-column">
            <img style="width: 120px" src="{{url(mix('images/logo-light.png'))}}" alt="Diretriz">
            <p class="fs-7 mt-3 border-top pt-2 border-gray" style="color: #969696">Copyrigth 1986 - {{date('Y')}} - Diretriz Informática Eireli. Conheça a nossa
                <a href="{{route('lgpd.politica')}}" class="text-success">Política de Privacidade</a>.</p>
        </div>
    </footer>
@endsection
