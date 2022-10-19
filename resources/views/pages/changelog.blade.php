@extends('master')
@include('includes.header')
@include('includes.footer')
@section('pages')
    @yield('header')
    <div class="sistema">
        <div class="header-system">
            <div class="container d-flex flex-column">
                <h1 class="title-section">Notas de Versão</h1>
                <p class="fs-8">Sistema / <span class="text-success fw-bold">{{$sistema}}</span></p>
            </div>
        </div>
        <div class="w-100 p-4" style="background: #E4EDF3">
            <div class="container d-flex flex-wrap justify-content-center" style="min-height: 370px">
                <div class="w-100 mb-3">
                    <p class="mb-3 fs-7"><i class="fas fa-code-branch me-2 fs-4"></i>Lista de versões</p>
                    @if($versao)
                        <div class="accordion">
                            @php $id = 0; @endphp
                            @foreach($versao[$sistema] as $key => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button {{$id == 0 ? '' : 'collapsed'}}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#item-{!! $id !!}"><i
                                                class="bi bi-code fs-5 me-2"></i>{{$key}}</button>
                                    </h2>
                                    <div id="item-{!! $id !!}"
                                         class="accordion-collapse collapse {{$id == 0 ? 'show' : ''}}">
                                        <div class="accordion-body">
                                            @foreach($item as $i)
                                                <div
                                                    class="w-100 mb-3 fs-7 d-flex boder-gray pb-3 border-bottom text-gray">
                                                    <i class="fas fs-3 fa-{{$i->Tipo_Requisito_Orig == 'AD' ? 'hammer text-success' :
                                                            ($i->Tipo_Requisito_Orig == 'CE' ? 'gears text-success' :
                                                                ($i->Tipo_Requisito_Orig == 'IR' ? 'newspaper text-info' : 'code-pull-request'))}}"></i>
                                                    <div class="ms-3">
                                                        <p><b><i class="fas fa-code-pull-request me-1"></i>Tipo:</b> {{$i->Tipo_Requisito_Orig == 'AD' ? 'Adptativa' :
                                                            ($i->Tipo_Requisito_Orig == 'CE' ? 'Corretiva' :
                                                                ($i->Tipo_Requisito_Orig == 'IR' ? 'Perfectiva' : 'Preventiva'))}}
                                                        </p>
                                                        <p>
                                                            <b><i class="fas fa-headset me-1"></i>Referência:</b> {{$i->LOCAL_REFER_PENDENCIA}}
                                                        </p>
                                                        <p class="mt-1"><b><i
                                                                    class="fas fa-tv me-1"></i>Módulo:</b> {{$i->Modulo}}
                                                        </p>
                                                        {!! $i->Texto_Versao !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @php $id++; @endphp
                            @endforeach
                        </div>
                    @endif
                </div>
                @if(!isset($_GET['all']))
                    <x-button text="Carregar versões anteriores"
                              color="success my-3"
                              link="{{route('changelog', ['sistema' => $sistema . '?all=true'])}}"
                              type="normal"/>
                @endif
            </div>
        </div>
    </div>
@endsection
