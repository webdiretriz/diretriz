@section('news')
    <section class="bg-white news" id="news">
        <div class="container flex-wrap d-flex justify-content-center p-5">
            <h1 class="title-section">Últimas notícias e artigos</h1>
            <p class="w-100 text-center title-section fs-5">Fique por dentro das novidades da Diretriz</p>
            <div class="w-100 mt-4 d-flex flex-wrap justify-content-center justify-content-xl-start">
                @empty(!$boletim)
                    <x-news image="{{url(mix('images/boletim.jpg'))}}"
                            autor="{{$boletim[0]->usuario}}"
                            title="{{$boletim[0]->titulo}}"
                            text="Fique por dentro de informações e comunicados importantes para que você que atua na área pública e/ou empresarial"
                            link="https://www.diretriz.net/boletim/{{$boletim[0]->arquivo}}"
                            data="{{$boletim[0]->data}}"/>
                @endempty
                @empty(!$news)
                    @foreach($news as $item)
                        <x-news image="{{(empty($item->capa) ? url(mix('images/news.jpg')) : $item->capa)}}"
                                autor="{{$item->usuario}}"
                                title="{{$item->assunto}}"
                                :text="$item->mensagem"
                                link="{{route('noticias-view', ['id' => $item->id])}}"
                                data="{{$item->data}}"/>
                    @endforeach
                @endempty
            </div>
        </div>
    </section>
    <div class="w-100 d-flex bg-white justify-content-center pb-3">
        <div class="link">
            <p>Para ver mais notícias e artigos <a class="text-success" href="{{route('noticias-list')}}">clique aqui</a></p>
        </div>
    </div>
@endsection
