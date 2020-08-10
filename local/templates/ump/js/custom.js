$(document).ready(function() {

    $('.newsfeed__container').mCustomScrollbar({
        axis: "x"
    });

    var owl = $(".slider").owlCarousel({
        items: 1,
        autoplay: true,
        autoplayTimeout:8000,
        loop: true,
        nav: false,
        animateOut: 'fadeOut',
        dots: true,
        
    });

    //$('.owl-dot').click(function(){owl.trigger('to.owl.carousel', [$(this).index(), 300]);});
    
    $(".pricerotator__rotator").owlCarousel({
        items: 1,
        autoplay: true,
        animateOut: 'fadeOut',
        loop: true,
        mouseDrag: false
    });

    $(".newsfeed__items").owlCarousel({
        items: 4,
        autoplay: false,
        animateOut: 'fadeOut',
        loop: false,
        mouseDrag: true,
        nav: false,
        dots: false
    });

    $(".reviews__items").owlCarousel({
        items: 2,
        autoplay: false,
        loop: true,
        mouseDrag: true,
        nav: true,
        dots: false,
        margin: 30
    });



    // Центрируем картинки в главном навигационном меню
    $('.dropdown-topmenu__level2 .dropdown-topmenu__link').each(function( index ) {
        $(this).find('img').css('margin-left', '-' + $(this).width()/2 + 'px');
    });

    // Подсвечиваем ссылки родителей в главном навигационном меню
    $('.dropdown-topmenu__list').hover(function() {
        $(this).parent('li').toggleClass('dropdown-topmenu__item_active');
    }, function() {
        $(this).parent('li').toggleClass('dropdown-topmenu__item_active');
    });

    $('.header__link').on('click', function() {
        $('.fancybox-container').hide();
    });

    $('.header__searchbutton').on('click', function() {
        $(this).toggleClass('header__searchbutton_clicked');
        $('.header__searchcontainer').toggleClass('header__searchcontainer_shown');
    });










    $('.leftmenu__link').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('leftmenu__item_active');
        $(this).parent().find('> .leftmenu__sublist').slideToggle();
    });
    
    $('.leftmenu__sublink').on('click', function(e) {
        if($(this).parent().hasClass('leftmenu__subitem_last')) {

        } else {
            e.preventDefault();
            $(this).parent().toggleClass('leftmenu__subitem_active');
            $(this).parent().find('> .leftmenu__sublist').slideToggle();
        }
        
    });












    // Табы в карточке товара
    if($('.product__tab').length == 0) {
        $('.product__tabs').hide();
    }
    
    $('.product__tab:first-child').addClass('product__tab_active');

    $('.product__tab').on('click', function() {
        $('.product__tabinfo').hide();
        var currentDataTabname = $(this).attr('data-tabname');
        $('.product__tabinfo[data-tabname="' + currentDataTabname + '"]').fadeIn();

        $('.product__tab').removeClass('product__tab_active');
        $(this).addClass('product__tab_active');


        var url_string = window.location.href;
        var url = new URL(url_string);
        url.searchParams.append('tab', currentDataTabname);
    });



    $('.product__offerlabel:first-child input').attr('checked', 'checked');

    $('.product__offerradio').on('click', function() {
        var offerId = $(this).attr('data-offer-id');
        $('.product__offerprice').hide();
        $('.product__offerprice[data-offer-id="' + offerId + '"]').fadeIn();
    });


    // В каталоге в левом меню делаем авторазворот блоков при нахождении в нужном разделе
    var breadcrumb_2 = $('#bx_breadcrumb_1 a span').text();
    $('.leftmenu__list > .leftmenu__item').map(function() {
        if($(this).find('> a').text() == breadcrumb_2) {
            $(this).find('> a').trigger('click');
        }
    });


    if($('.breadcrumbs > .breadcrumbs__item').length == 3) {
        var breadcrumb_3 = $('.breadcrumbs > .breadcrumbs__item:nth-child(3) span').text();
        $('.leftmenu__sublink:contains("' + breadcrumb_3 + '")').parent().addClass('leftmenu__subitem_active');
    }

    if($('.breadcrumbs > .breadcrumbs__item').length == 4) {
        var breadcrumb_4 = $('.breadcrumbs > .breadcrumbs__item:nth-child(4) span').text();

        $('.leftmenu__sublink:contains("' + breadcrumb_4 + '")').parent().addClass('leftmenu__subitem_active');
        $('.leftmenu__sublink:contains("' + breadcrumb_4 + '")').parent().parent().parent().find('> a').trigger('click');
    }



    


    var dataTable = $('.product__offerstable_locks').DataTable({
        fixedHeader: true,
        "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
        "iDisplayLength": 5
    });

    /*var select = $('<div class="product__offerstable-selectwrapper"><select><option value="" class="product__offerstable-option"></option></select></div>')
        .appendTo( $('tfoot th.satan').empty() )
        .on( 'change', function () {
            dataTable.column( 6 )
                .search( $(this).val() )
                .draw();
        } );

        dataTable.column( 6 ).data().unique().sort().each( function ( d, j ) {
        select.find('select').append( '<option value="'+d+'" class="product__offerstable-option">'+d+'</option>' )
    } );*/

    

    $('.header__dealers-entry').on('click', function() {
        setTimeout(function() {
            if($('div').is('.fancybox-container .header__popup')) {
                $('.header__top').css('z-index','99999');
            } 
        }, 100);
    });

    $('[data-fancybox]').fancybox({
        'beforeClose': function() { $('.header__top').css('z-index','0'); },
        'closeClick': true
    });

    $('.reviews__items .owl-nav').insertAfter('.reviews__items');



    







});