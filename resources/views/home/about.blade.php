@section('about')
    <section class="bg-white about" id="diretriz">
        <div class="container p-5">
            <h1 class="title-section">Conheça um pouco mais sobre a Diretriz</h1>
            <div class="w-100 d-flex flex-wrap mb-4 py-5">
                <x-about icon="flag-checkered"
                         number="01"
                         title="O Início"
                         text="Em 1986 no Sul de Minas Gerais na cidade de Varginha foi fundada a Diretriz Systems & Results, empresa do ramo de tecnologia, pelo empresário e atual proprietário Ludmar Santana."/>
                <x-about icon="map-location-dot"
                         right="true"
                         number="02"
                         title="A Expansão"
                         text="E empresa possui filial em Aracaju - SE e uma representação em Boa Vista - RR."/>
                <x-about icon="briefcase"
                         number="03"
                         title="Negócios"
                         text="A empresa tem como principal objetivo o desenvolvimento dos melhores softwares para proporcionar a melhor funcionalidade e eficiência da Gestão Pública e Empresarial."/>
                <x-about icon="computer"
                         right="true"
                         number="04"
                         title="Inovação"
                         text="A partir da década de 90, a empresa decidiu que além de desenvolver suas soluções, começaram a realizar parcerias. A empresa atualmente conta com três grandes parcerias. Parcerias que beneficiam muitos clientes."/>
                <x-about icon="network-wired"
                         number="05"
                         title="Segmento"
                         text="Atende empresas de todos os portes em segmentos do ramo público e empresarial nos estados de MG, RJ, RR e SE."/>
                <x-about icon="users"
                         right="true"
                         number="06"
                         title="Equipe"
                         text="A empresa conta com um quadro de aproximadamente 90 colaboradores, que são treinados e capacitados constantemente para fornecer um atendimento cada vez melhor ao cliente.."/>
            </div>
        </div>
    </section>
    <div class="w-100 bg-success d-flex justify-content-center flex-column align-items-center">
        <img src="{{url(mix('images/senior.png'))}}" alt="Senior">
    </div>
@endsection
