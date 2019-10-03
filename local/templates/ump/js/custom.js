$(document).ready(function(){
    var owl = $(".slider").owlCarousel({
        items: 1,
        autoplay: true,
        nav: true,
        animateOut: 'fadeOut',
        dots: true,
        dotsData: true
    });

    $('.owl-dot').click(function(){owl.trigger('to.owl.carousel', [$(this).index(), 300]);});

    

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

    // $('.leftmenu__link').on('click', function(e) {
    //     e.preventDefault();
    //     $(this).parent().toggleClass('leftmenu__item_active');
    //     $(this).parent().find('> .leftmenu__sublist').slideToggle();
    // });

    // $('.leftmenu__sublink').on('click', function(e) {
    //     e.preventDefault();
    //     $(this).parent().toggleClass('leftmenu__subitem_active');
    //     $(this).parent().find('> .leftmenu__sublist').slideToggle();
    // });

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

    // var url_string = window.location.href;
    // var url = new URL(url_string);
    // var tab = url.searchParams.get("tab");
    // if(tab == 'true') {
    
    // } else {
    
    // }







});