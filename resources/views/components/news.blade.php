@php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); @endphp
<article class="single">
    <img src="{{$image}}" alt="capa">
    <div class="d-flex flex-wrap p-3 position-relative">
        <p class="mb-2 data title-section"><i class="fas fa-calendar-alt fs-5 me-1"></i> {{ strftime("%A, %d de %B de %Y", strtotime($data))}}</p>
        <p class="mb-2 title-section"><i class="bi bi-person fs-5 text-success"></i> {{$autor}}</p>
        <h2 class="fs-5 mb-2 title-section">{{$title}}</h2>
        <div class="fs-7 w-100 text-gray mb-2 html">
            @isset($text)
                {!! \Illuminate\Support\Str::words($text, 30) !!}
            @endisset
        </div>
        <a href="{{$link}}" class="btn btn-success text-primary p-1 px-2"><i class="fas fa-link"></i></a>
    </div>
</article>
