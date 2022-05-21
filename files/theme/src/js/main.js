$('.back-to-top').on('click', function(e) {
    $('html,body').animate({scrollTop:0});
    e.preventDefault();
});

$('.pop-up-x').on('click', function(e) {
    $('.ce_rsce_pop-up').addClass('pop-up-closed');
    e.preventDefault();
});


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll <= 50) {
        $('body').removeClass("not-top");
    }
    if (scroll > 50) {
        $('body').addClass("not-top");
    }
});

