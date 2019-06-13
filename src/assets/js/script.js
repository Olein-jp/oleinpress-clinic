jQuery(function($){
    $(".p-hamburger-button").on( 'click', function() {
        $('.p-hamburger-button').toggleClass( 'is-active' );
        $('.p-global-menu').fadeToggle(400);
    });

    if (window.matchMedia( 'screen and (min-width: 992px)' ).matches) {
        $('.p-header-menu').superfish();
    }
});