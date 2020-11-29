$(function() {

    if($(window).width() < 993) {
        changeBfWidth();
    }

    function changeBfWidth() {
        $('.container.bf').css('width', ($(window).width() - 20) + 'px');
    }

    window.onresize = function() {
        if($(window).width() < 993) {
            changeBfWidth();
        }
    };


    $('.bf__product').map(function() {
        $('<a class="bf__text bf__text_red" data-fancybox data-src="#callbackform" href="javascript:;">Заказать</a>').insertAfter($(this).find('.bf__price'));
    });

    $('a.bf__text_blue').attr('target', '_blank');

    $(".owl-carousel").owlCarousel({
        //items: 5,
        nav: true,
        loop: true,
        responsive: {
            0 : {
                items: 1,
            },
            992 : {
                items: 5,
            }
        }
    });

    $('.tooltip').tooltipster({
        theme: 'tooltipster-shadow',
        contentCloning: true
    });

    $('.bf__tab').on('click', function() {
        $('.bf__tab').removeClass('bf__tab_active');
        $(this).addClass('bf__tab_active');

        $('.bf__tabinfo').removeClass('bf__tabinfo_active');
        $('.bf__tabinfo[tab=' + $(this).attr('tab') + ']').addClass('bf__tabinfo_active');
    });

    $('.bf__title').on('click', function() {
        $('#producttype').val($(this).text());
        $('#callbackform h2 span').text($(this).html());
    });

    $('.bf__text_red').on('click', function() {
        $('#producttype').val($(this).next().text());
        $('#callbackform h2 span').text($(this).next().text());
    });

});