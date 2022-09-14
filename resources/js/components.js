/**
 * Exibe o valor que está no compo password
 * @param element
 */
function PreviewPassword(element, color = '#999da0'){
    $("input[type='password']." + element).showHidePassword();
    $(".show-hide-password").css({
        color: color
    });
}

/** Formata os campo com mascara de dados*/
function mask() {
    if ($('.formDate').length || $('.formTime').length || $('.formCnpj').length || $('.formCep').length || $('.formCpf').length || $('.formPhone').length || $('.formMoney').length || $('.formCel').length) {
        $(".formDate").mask("99/99/9999");
        $(".formTime").mask("99/99/9999 99:99");
        $(".formCep").mask("99999-999");
        $(".formCpf").mask("999.999.999-99");
        $(".formCnpj").mask("99.999.999/9999-99");
        $('.formMoney').maskMoney({prefix: 'R$ '});
        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        $('.formPhone').mask(SPMaskBehavior, spOptions);
        $('.formCel').mask("(00) 99999-9999");
    }
}

/**
 * Message - Constroi o plugin de messagem
 * @param message
 * @param type
 * @param duration
 * @param position
 */
function message(message, type = 'warning', duration = 5000, position = 'top-right') {
    let i = '';
    switch (type) {
        case 'success':
            i = 'check-circle';
            break;
        case 'warning':
            i = 'exclamation-triangle';
            break;
        case 'info':
            i = 'info-circle';
            break;
        case 'error':
            i = 'bomb';
            break;
    }

    if (message.length !== 0) {
        Snackbar.show({
            text: "<p class='d-flex m-0 align-items-center'><i class='me-2 fas fa-" + i + "' style='font-size: 18px'></i>" + message + "</p>",
            pos: position,
            customClass: type,
            duration: duration,
            showAction: false
        });
    }

    //detales da mensagem
    $("body").find(".snackbar-container #details").on('click', function () {
        $(this).parent().find('.details').slideToggle();
    });
}

/**
 * Confirmação de delete
 * @param message
 * @param action
 * @param value
 */
function confirmDelete(message, action, value) {
    let modal = `<div class="modal d-flex justify-content-center align-items-center fade" id="confirmDelete">
        <div class="modal-dialog mt-5" style="min-width: 350px;">
            <div class="modal-content bg-primary" style="margin: auto; max-width: 500px; border: 1px solid;">
                <div class="modal-header py-1 px-2 bg-primary" style="border-bottom-color: #202020">
                    <p class="modal-title mt-1 p-1 text-white text-lg">Confirmação</p>
                </div>
                <div class="modal-body p-3">
                    <p class="text-white"><i class="fas fa-exclamation-triangle"></i> ${message}</p>
                </div>
                <div class="modal-footer py-2 px-3" style="border-top-color: #202020">
                    <a href="#"
                    data-bs-dismiss="modal"
                    class="btn close btn-pink text-xs"
                    style="color: #fff; text-shadow: none; opacity: 1;">Cancelar</a>
                    <a href="#"
                       data-value="${value}"
                       data-action="${action}"
                       class="btn btn-info text-white ajax_click">Confirmar</span></a>
                </div>
            </div>
        </div>
    </div>`;

    $("body").prepend(modal);
    let m = new bootstrap.Modal(document.getElementById('confirmDelete'));
    m.show();
    configModal();
}

/**
 * QuillEditor - Instancia o editor html
 */
function QuillEditor() {

    //verifica se exite element na pagina
    if ($("body").find("#QuillEditor").length) {
        var toolbarOptions = [
            [{'font': []}],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block', 'link'],

            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            [{'list': 'ordered'}, {'list': 'bullet'}],

            [{'color': []}, {'background': []}, {'align': []}]
        ];

        var quill = new Quill('#QuillEditor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        quill.on('text-change', function () {
            let content = [];
            let send = $("body").find("#QuillEditorSend");
            let text = "";

            quill.getLines(0, 1000).forEach((index, value) => {
                content[value] = index.domNode;
            });

            content.forEach((index, value) => {
                text += index.outerHTML;
                if(text.length == 11 && text === '<p><br></p>'){
                    text = null;
                }
                send.text(text);
            });
        });
    }
}

/**
 * [inputFile] - Instancia o plugin do input file
 */
function inputFile() {
    $("body").on("change", "input[type='file']", function (e) {
        let nameFile = [];
        let text = $(this).parent().find(".file-name");
        [...nameFile] = $(this)[0].files;

        if (nameFile.length === 1) {
            nameFile.forEach((value, index) => {
                text.text(value.name);
            });
        } else if (nameFile.length > 1) {
            let a = "</br>";
            nameFile.forEach((value, index) => {
                a += value.name + "</br>";
            });
            text.html(a);
        }
    });
}

/**
 * [tooltip] - Inicializa o componente
 */
function tooltip() {
    $('[data-toggle="tooltip"]').tooltip();
}

/**
 * [searchCEP] - Função responsável por buscar o CEP informado e verificar sua
 * existencia no WEBSERVICE Via CEP
 */
function searchCEP(elemento) {
    $("html").on("change", elemento, function (e) {
        var cep = $(this).val().replace("-", "").replace('.', '');
        if (cep.length === 8) {
            var xmlRequest = new XMLHttpRequest();
            var url = "https://viacep.com.br/ws/" + cep + "/json";

            function response() {
                let data = JSON.parse(this.response)
                $(".j_rua").val(data.logradouro);
                $(".j_cidade").val(data.localidade);
                $(".j_uf").val(data.uf);
                $(".j_bairro").val(data.bairro);
            }
            xmlRequest.open('GET', url, true);
            xmlRequest.onload = response;
            xmlRequest.send();
        }
        e.preventDefault();
    });
}

/**
 * [dropdown] - Realiza a exibição componente dropdown
 */
function dropdown() {
    $("body").on('click', '.dropdown .dropdown-toggle', function (e) {
        e.stopPropagation();
        let drop = $(this).attr('data-toggle');
        let minWidth = $(this).attr('data-min-width');
        if (drop === 'dropdown-default') {
            let mw = (minWidth === undefined ? null : 'min-width: ' + minWidth + 'px');
            $(this).parent('.dropdown').find('.dropdown-menu')
                .toggleClass('show')
                .toggleClass('animate__bounceIn')
                .attr('style', 'top: calc(100% + 5px) !important; ' + mw);
        }
    });

    $(window).click(function () {
        $(".dropdown").find('.dropdown-menu')
            .removeClass('show animate__bounceIn');
    });

    $("body").on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });
}
