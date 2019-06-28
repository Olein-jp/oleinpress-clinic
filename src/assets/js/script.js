jQuery(function($){
    $(".p-hamburger-button").on( 'click', function() {
        $('.p-hamburger-button').toggleClass( 'is-active' );
        $('.p-global-menu').fadeToggle(400);
    });

    if (window.matchMedia( 'screen and (min-width: 992px)' ).matches) {
        $('.p-global-menu').superfish();
    }

    $('.p-slider-body').slick({
        dots: true,
        slideToShow: 1,
        speed: 3000,
        fade: true,
        autoplay: true,
        centerPadding: '0px',
    });
});