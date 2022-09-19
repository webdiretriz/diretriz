$(document).ready(function () {
    ScrollNav('.links')
    ScrollReveal().reveal('section', {
        scale: .975,
        delay: 300,
        reset: true
    });
    Dropdown();
});

//Evento do scroll
$(document).scroll(function () {
    ScrollTop();
    ScrollHeader();
})

//Realiza o scroll animado
function ScrollNav(element) {
    $("body").find(element).find('a:not(".j_menu")').on('click', function (event) {
        let target = $(this).attr('href');
        let top = $(target).offset().top;
        $("html, body").animate({scrollTop: top - 80}, 500);
        $(".j_menu").first().trigger('click');
        event.preventDefault();
    });

    $("body").on('click', '.backTop', function () {
        $("html, body").animate({scrollTop: 0}, 500);
    })
}

//BackTop
function ScrollTop() {
    let banner = $(".initial").outerHeight();
    let backTop = $("body").find(".backTop");
    if ($(document).scrollTop() >= (banner - 400)) backTop.removeClass('d-none animate__backOutRight')
        .addClass('d-flex animate__backInRight');
    else {
        backTop.addClass('animate__backOutRight');
        setTimeout(function () {
            backTop.addClass('d-none').removeClass('d-flex')
        }, 100);

    }
}

//Realiza a exibição do header com scroll
function ScrollHeader() {
    let header = $("body").find(".header");
    if ($(document).scrollTop() > 600) {
        header.addClass('animate__bounceIn active')
    } else {
        if (header.hasClass('animate__bounceIn active')) {
            header.addClass('animate__bounceOut')
            setTimeout(() => {
                header.removeClass('animate__bounceOut')
                header.removeClass('active animate__bounceIn')
            }, 500)
        }
    }
}

//Realiza o dropdown do site
function Dropdown() {

    //click
    $('body').on('click', '#j_dropdown', function (e) {
        e.preventDefault();
    });

    //mouse
    $("body").on('mouseenter', '#j_dropdown', function () {
        $(this).stop();
        $(this).addClass('text-success')
        $(this).parent().find('#j_dropdown-link').addClass('active');
    });

    //mouse
    $("body").on('mouseenter', '.links > li a', function () {
        let n = $(this).attr('data-dropdown');
        if (n !== undefined){
            $("body").find("#j_dropdown-link[data-dropdown!='" + n + "']")
                .stop()
                .removeClass('active');
            $("body").find("#j_dropdown[data-dropdown!='" + n + "']")
                .removeClass('text-success');
        }
    });

    //mouse
    $("body").on('mouseenter', '#j_dropdown-link', function () {
        $(this).stop().addClass('active');
    });

    //mouse
    $("body").on('mouseleave', '#j_dropdown-link', function () {
        $(this).stop();
        $(this).parent().find('#j_dropdown').removeClass('text-success')
        $(this).removeClass('active');
    });
}
