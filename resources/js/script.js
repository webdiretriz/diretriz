$(document).ready(function () {
    ScrollNav('.links')
    ScrollReveal().reveal('section', {
        scale: .975,
        delay: 300,
        reset: true
    });
});

//Evento do scroll
$(document).scroll(function () {
    ScrollTop();
})

//Realiza o scroll animado
function ScrollNav(element) {
    $("body").find(element).find('a:not(".j_menu")').on('click', function (event) {
        let target = $(this).attr('href');
        let top = $(target).offset().top;
        $("html, body").animate({scrollTop: top}, 500);
        $(".j_menu").first().trigger('click');
        event.preventDefault();
    });

    $("body").on('click', '.backTop', function (){
        $("html, body").animate({scrollTop: 0}, 500);
    })
}

//BackTop
function ScrollTop() {
    let banner = $(".initial").outerHeight();
    let backTop = $("body").find(".backTop");
    if ($(document).scrollTop() >= (banner - 400)) backTop.removeClass('d-none animate__backOutRight')
        .addClass('d-flex animate__backInRight');
    else backTop.addClass('animate__backOutRight')
        .setTimeout(function () {
            $(this).addClass('d-none').removeClass('d-flex')
        }, 100);
}
