@extends('master')
@include('includes.header')
@include('home.banner')
@include('home.service')
@include('home.about')
@include('home.client')
@include('home.news')
@include('home.contact')
@include('includes.footer')

{{--banner--}}
<div class='initial'>
    <img class="initial-bg" src="{{url(mix('images/background.jpg'))}}" alt="Diretriz">
    @yield('header')
    @yield('banner')
</div>
