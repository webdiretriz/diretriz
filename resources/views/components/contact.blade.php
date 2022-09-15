<article class="single p-3 px-4">
    <i class="bi bi-building text-success fs-1"></i>
    <p class="fs-7 mt-1">{{$cidade}}</p>
    @isset($rua)<p class="text-white mt-1 fs-7"><i class='fas fa-location me-1 text-success'></i> {{$rua}}</p>@endisset
    @isset($mail)<p class="text-white mt-1 fs-7"><i class='fas fa-envelope me-1 text-success'></i> {{$mail}}</p>@endisset
    @isset($phone)<p class="text-white mt-1 fs-7"><i class='fas fa-phone me-1 text-success'></i> {{$phone}}</p>@endisset
</article>
