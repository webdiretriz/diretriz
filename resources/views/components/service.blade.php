{{--componente de serviços--}}
<article class="single my-4">
    <img src="{{url(mix('images/' . $image . '.png'))}}" alt="Logo">
    <div class="ms-4 fs-7">
        <h2 class="title-section">{{$title}}</h2>
        <p class="my-2 text-light">{{$text}}</p>
        <a class="text-success text-decoration-none" href="{{$link}}"><i class="fas fa-link me-1"></i>Saiba mais</a>
    </div>
</article>
