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

/****
 * Modal for Showcases
 */
$('.type-modal .teaser-card-button').click(function (e) {
    e.preventDefault();
    let currentModalNumber = $(this).data('item');
    $(".teaser-card-modal").addClass('hidden');
    let currentModal = $(".teaser-card-modal[data-item='" + currentModalNumber + "']");
    currentModal.removeClass('hidden');
    $('body').addClass('lock-scroll');
});
$('.modal-close').click(function (e) {
    e.preventDefault();
    $(".teaser-card-modal").addClass('hidden');
    $('body').removeClass('lock-scroll');
});
$('.modal-backdrop').click(function (e) {
    e.preventDefault();
    $(".teaser-card-modal").addClass('hidden');
    $('body').removeClass('lock-scroll');
});


