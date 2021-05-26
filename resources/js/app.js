// Navigation toggle
jQuery(document).ready(function() {

    const main_navigation = jQuery('#primary-menu');

    jQuery('#primary-menu-toggle').on('click', function(e) {
        e.preventDefault();

        main_navigation.toggleClass('hidden');
    });
});
$('.slick').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    arrows: false
});

$(window).resize(function() {
    $('.background-cover')[0].slick.refresh();
});