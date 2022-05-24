$(document).ready(function() {

    $('.nav-link').click(function(e) {
        e.preventDefault()

        let url = $(this).attr('href')

        $('#content').empty()

        $('#content').load(url)
    })
})

//Drop Menu

/** 
$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});


const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function() {
    $html.classList.toggle('dark-mode')
})



$(document).ready(function() {

    $("nav div").click(function() {
        $("ul").slideToggle();
        $("ul ul").css("display", "none");
    });

    $("ul li").click(function() {
        $("ul ul").slideUp();
        $(this).find('ul').slideToggle();
    });

    $(window).resize(function() {
        if ($(window).width() > 768) {
            $("ul").removeAttr('style');
        }
    });

})

//Fundo menu
$(document).ready(function() {

    $('.btn-original').click(function(original) {
        original.preventDefault()

        $('body').removeClass('claro')
        $('body').removeClass('escuro')
        $('body').addClass('original')
        $('p').removeClass('text-white')
        $('p').addClass('text-dark')
    })

    $('.btn-escuro').click(function(escuro) {
        escuro.preventDefault()

        $('body').removeClass('original')
        $('body').removeClass('claro')
        $('body').addClass('escuro')
        $('p').removeClass('text-dark')
        $('p').addClass('text-white')
    })

    $('.btn-claro').click(function(claro) {
        claro.preventDefault()

        $('body').removeClass('original')
        $('body').removeClass('escuro')
        $('body').addClass('claro')
        $('p').removeClass('text-whit')
        $('p').addClass('text-dark')
    })

}) */