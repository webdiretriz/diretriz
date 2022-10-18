{{--Componente de Botão--}}
@php
    $link = (isset($link) ? $link : '#');
    $color = (isset($color) ? $color : 'secondary');
    $text = (isset($text) ? $text : 'Saiba mais');
    $type = (isset($type) ? $type : 'circle');
    $size = (isset($size) ? $size : '');
@endphp
<a href="{{$link}}" target="_blank" class="button__zircona {{$size}} {{$type}} me-2 {{$color}}">
    <div class="border"></div>
    @if(isset($icon))
        <div class="icon"><i class="{{$icon}} fs-6"></i></div>
    @else
        <div class="text">{{$text}}</div>
    @endif
</a>
