$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
//
$(document).ready(function () {

    $('[data-toggle=tooltip]').tooltip();

    $(".testimoial-carousel").owlCarousel({
        rtl : true,
        loop : true,
        margin : 30,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });



    $(window).on('scroll', function () {
         ;
    });

});

function navbarSticky() {

}
new WOW().init();
