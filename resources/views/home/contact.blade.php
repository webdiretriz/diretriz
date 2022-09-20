@section('contact')
    <section class="bg-white contact pb-5" id="contact">
        <div class="container p-4 d-flex justify-content-center flex-wrap">
            <h1 class="title-section w-100 mb-4" style="font-size: 2.8em">Entre em contato conosco</h1>
            <div class="w-100 d-flex flex-wrap justify-content-center justify-content-xl-between">
                <x-contact cidade="Varginha - MG"
                           rua="37026-480 - Rua Salomé Leite Alvarenga n° 86 / Jardim Andere"
                           mail="contato@diretriz.net"
                           phone="(35) 2105-3105 - Principal"/>
                <x-contact cidade="Aracajú - SE"
                           rua="49.051.060 - Rua Manoel Teixeira n° 06 / Bairro Suíssa"
                           mail="contato.se@diretriz.net"
                           phone="(79) 3222-0610 / (79) 3222-0620"/>
                <x-contact cidade="Raraima"
                           mail="contato@diretriz.net"
                           phone="(95) 99165-5115 / (95) 98406-3218"/>
            </div>
            <form method="post" name="contact" class="d-flex justify-content-between flex-wrap mt-5">
                <div class="field mt-4">
                    <input type="text" class="form-control" placeholder="Seu nome">
                </div>
                <div class="field mt-4">
                    <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="field mt-4">
                    <input type="text" class="form-control" placeholder="Sua cidade">
                </div>
                <div class="field mt-4">
                    <input type="text" class="form-control" placeholder="Assunto">
                </div>
                <div class="mt-4" style="width: 100%">
                    <textarea class="form-control" placeholder="Escreva a mensagem..." rows="3"></textarea>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="" id="lgpd">
                    <label class="form-check-label" for="lgpd">
                        Declaro que li e estou de acordo com a <a href="" class="link-success">Política de Privacidade</a> e <a class="link-success" href="">Cookies</a> da Diretriz Informática
                        com relação aos meus dados fornecidos neste formulário.
                    </label>
                </div>
                <div class="w-100 mt-4 d-flex justify-content-center">
                    <button class="btn bg-success text-dark title-section fs-5 m-0 p-2 px-3"><i
                            class="bi bi-send-fill me-1"></i>Enviar sua mensagem
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
