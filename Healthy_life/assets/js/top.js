function isVisible(elment) {
    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elment).offset().top;

    return y <= (vpH + st);
}

$(window).scroll(function() {
    if($(this).scrollTop() == 0) {
        $('#to-top').fadeOut();
    } else if (isVisible($('footer'))) {
        $('#to-top').css('position','absolute');
    } else {
        $('#to-top').css('position','fixed');
        $('#to-top').fadeIn();
    }
});