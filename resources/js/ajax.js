$(function () {

    /** loading */
    var loading = "<span class='spinner-border sm loading'><span class='visually-hidden'>Loading...</span></span>";

    //ajax default
    $("body").find("form:not('.ajax_off')").submit(function (e) {
        let form = $(this);
        form.ajaxSubmit({
            url: form.attr('action'),
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            beforeSend: function () {
                loadingButton(form);
                errorFieldsClear(form);
            },
            success: function (response) {
                responseDefault(response, form)
                loadingButton(form, 'off');
            },
            error: function (data) {
                errorFields(form, data.responseJSON.errors)
                loadingButton(form, 'off');
            }
        });
        e.preventDefault();
    });

    /** Realiza o ajax através do click */
    $("body").on("click", ".ajax_click", function (e) {
        let click = $(this);
        let url = click.attr('data-action');
        let value = click.attr('data-value');
        let load = click.attr('data-load') === undefined ? 'true' : click.attr('data-load');
        let form = click.attr('data-form') === undefined ? null : $('body').find('form[name="'+ click.attr('data-form') +'"]');
        let res = click.attr('data-response');

        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {dados: value},
            beforeSend: function (xhr) {
                if (load === 'true') {
                    click.append(loading);
                }
                click.prop('disabled', true);
            },
            success: function (response) {
                click.prop('disabled', false);
                click.find('.loading').remove();
                responseDefault(response, form);
                if (typeof ajaxResponse === 'function')
                    ajaxResponse(res, response)
            },
            error: function (data) {
                errorFields(form, data.responseJSON.errors);
                click.prop('disabled', false);
                click.find('.loading').remove();
            }
        });
        e.preventDefault();
    })

    /** Realiza o ajax atraves do change **/
    $("body").on("change", '.ajax_change', function (e){
        let change = $(this);
        let value = change.val();
        let url = change.attr('data-action');
        let res = change.attr('data-response');
        let form = change.attr('data-form') === undefined ? null : $('body').find('form[name="'+ change.attr('data-form') +'"]');
        errorFieldsClear(form);

        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {dados: value},
            beforeSend: function (xhr) {
                change.prop('disabled', true);
            },
            success: function (response) {
                change.prop('disabled', false);
                responseDefault(response, form);
                if (typeof ajaxResponse === 'function')
                    ajaxResponse(res, response)
            },
            error: function (data) {
                if(typeof data.responseJSON === 'string')
                    message(data.responseJSON, 'error');
                errorFields(form, data.responseJSON.errors);
                change.prop('disabled', false);
            }
        });
        e.preventDefault();
    });
})

/**
 * Coloca os erros nos campos do formulário enviado
 * @param form
 * @param errors
 */
function errorFields(form, errors, validate = 'is-invalid') {
    $.each(errors, function (key, value) {
        //radio
        form.find("input[name='" + key + "'][type='radio']")
            .parent()
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback') + ' d-block').text(value[0]);

        //file
        form.find("input[name='" + key + "'][type='file']")
            .parent()
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback') + ' d-block').text(value[0]);

        //input
        form.find("input[name='" + key + "']")
            .addClass(validate)
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback')).text(value[0]);

        //select
        form.find("select[name='" + key + "']")
            .addClass(validate)
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback')).text(value[0]);

        //editor
        form.find("textarea[name='" + key + "']")
            .addClass(validate)
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback') + ' d-block m-0').text(value[0]);

        //custom
        form.find(".errorFields[id='" + key + "']")
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback') + ' d-block m-0').text(value[0]);

        //dados
        form.find(".errorFields[data-mensage='" + key + "']")
            .addClass(validate)
            .parent()
            .find("#j_feedback").addClass((validate === 'is-invalid' ? 'invalid-feedback' : 'valid-feedback') + ' d-block m-0').text(value[0]);
    });
}

/**
 * Limpa os erros dos campos
 * @param form
 */
function errorFieldsClear(form) {

    //file
    form.find("input[type='file']")
        .parent()
        .parent()
        .find("#j_feedback").removeClass('invalid-feedback').text('');

    //text
    form.find("textarea")
        .parent()
        .find("#j_feedback").removeClass('invalid-feedback d-block m-0').text('');

    //input
    $.each(form.find('input'), function (key, value) {
        $(this).removeClass('is-invalid')
            .removeClass('is-valid')
            .parent()
            .find("#j_feedback").removeClass('invalid-feedback').text('');
    });

    //input
    $.each(form.find('input'), function (key, value) {
        $(this).removeClass('is-invalid')
            .removeClass('is-valid')
            .parent()
            .parent()
            .find("#j_feedback").removeClass('invalid-feedback').text('');
    });

    //select
    $.each(form.find('select'), function (key, value) {
        $(this).removeClass('is-invalid')
            .removeClass('is-valid')
            .parent()
            .find("#j_feedback").removeClass('invalid-feedback').text('');
    });

    //custom
    form.find(".errorFields")
        .find("#j_feedback").removeClass('invalid-feedback d-block m-0').text('');
}

/**
 * Limpar o erro do campo especifico
 * @param form
 * @param field
 */
function errorFieldClear(form, field) {

    //input
    $('body').find('input[name="' + field + '"]').removeClass('is-invalid')
        .removeClass('is-valid')
        .parent()
        .find("#j_feedback").removeClass('invalid-feedback').text('');

    //Editor tiny
    $('body').find('#' + field).removeClass('is-invalid')
        .removeClass('is-valid')
        .parent()
        .find("#j_feedback").removeClass('invalid-feedback').text('');
}

/**
 * Mostra o load no botão de envio
 * @param toggle
 * @param form
 */
function loadingButton(form, toggle = 'on') {
    let button = form.find("#j_action");
    let icon = (button.attr('data-noicon') !== 'true' ? "<i class='fas fa-save text-xs mr-1'></i>" : '');
    let loadingColor = button.attr('data-load-color');
    let loading = "<span class='spinner-border me-1 text-" + (loadingColor === undefined ? 'white' : loadingColor) + "' style='width: 15px; height: 15px; border: .20em solid currentColor; border-right-color: transparent'><span class='visually-hidden'>Loading...</span></span>";
    if (toggle === 'on') {
        button.attr('disabled', 'true');
        button.find("i").remove();
        button.prepend(loading);
    } else {
        button.removeAttr('disabled');
        button.find(".spinner-border").remove();
        button.prepend(icon);
    }
}

/**
 * Realiza a limpeza do formulário no momento do fechamento
 */
function configModal() {

    //open
    $('.modal').on('shown.bs.modal', function () {
        let form = $(this).find("form");
        let CRUD = (form.attr('data-crud') === undefined ? 'false' : form.attr('data-crud'));

        //verifica se a modal possui gestão de CRUD
        if (CRUD === 'true') {
            let mode = form.attr('data-mode');
            if (mode === 'create') {
                $(this).find("#mode").text("Cadastrar");
                form.find('#mode').text("Cadastrar");
            }

            if (mode === 'edit') {
                form.find('#mode').text("Atualizar");
                $(this).find("#mode").text("Atualizar");
            }
        }
    })

    //closed
    $('.modal').on('hide.bs.modal', function () {
        let form = $(this).find("form");
        let CRUD = (form.attr('data-crud') === undefined ? 'false' : form.attr('data-crud'));

        //verifica se a modal possui gestão de CRUD
        if (CRUD === 'true') {
            let execpt = form.attr('data-except').split("&");
            form.attr('data-mode', 'create');
            $.each(form.find('input'), function (index, value) {
                let attr = $(value).attr('name');
                $.each(execpt, function (i, v) {
                    if (attr !== v) {
                        $(value).val('');
                    }
                });
            });
        }

        //modal de confirmação
        if ($(this).attr('id') === 'confirmDelete') {
            $(this).remove();
        }
    })
}

/**
 * Passar valor do campo para o data-value de outro campo
 */
function changeFieldParamns() {
    $("body").on('change', '.j_changeFieldsParamns', function () {
        let fieldName = $(this).attr('name');
        let field = $("body").find(".j_changeFieldsParamns_" + fieldName);
        field.attr('data-value', $(this).val());
    });
}

/**
 * Gerencia as resposta mais comuns do sistema
 * @param response
 */
function responseDefault(response, form = null) {

    // alimenta o formulário parametrizado
    if (response.formData) {
        let form = $("body").find("form[name='" + response.formDataName + "']");
        let dados = response.formData;
        $.each(form.find('input'), function (index, value) {
            let attr = $(value).attr('name');
            $.each(dados, function (i, v) {
                if (i == attr) {
                    $(value).val(v)
                }
            })

        });
    }

    //message
    if (response.message) {
        if(response.message?.text){
            message(response.message.text, response.message.type)
        }
    }

    //message nos campos
    if (response.errors) {
        errorFields(form, response.errors, (response.errorsValidate !== null ? response.errorsValidate : 'is-invalid'));
    }

    //Redireciona a navegação
    if (response.redirect) {
        window.location.href = response.redirect;
    }

    //limpa os campos do formulário
    if (response.clear) {
        form.find("input[type!='hidden'][type!='checkbox']").val("");
        form.find('textarea').text(null);
        form.find(".file-name").text('Nenhum arquivo selecionado');
        form.find(".ql-editor").html("");
    }

    //realiza a abertura manual das modal
    if (response.modal) {
        let modal = new bootstrap.Modal(document.getElementById(response.modal));
        modal.show();

        //modo da modal
        if (response.modalMode) {
            $("#" + response.modal).find('form').attr('data-mode', response.modalMode);
        }
    }

    //realiza o fechamento da modal
    if (response.closeModal) {
        $("#" + response.closeModal)
            .find(".btn-close")
            .trigger('click');
    }

    // realiza a passagem de parametro para os campos
    if (response.field) {
        $.each(response.field, function (key, value) {
            $("body").find("input[name='" + key + "']").val(value);
        })
    }

    // desabilita o campo parametrizado
    if (response.fieldDisabled) {
        $.each(response.fieldDisabled, function (key, value) {
            $("body").find("input[name='" + key + "']").prop('disabled', value)
        })
    }

    // desabilita a box parametrizado
    if (response.boxDisabled) {
        $.each(response.boxDisabled, function (key, value) {
            if (value === true) {
                $("body").find("#" + key).addClass('d-none', value)
            } else {
                $("body").find("#" + key).removeClass('d-none', value)
            }
        })
    }
}
