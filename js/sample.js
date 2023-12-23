$(document).ready(function () {
    var yourNavigation = $(".navbar");
    stickyDiv = "sticky";
    yourHeader = $('.bsit-banner').height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > yourHeader) {
            yourNavigation.addClass(stickyDiv);
        } else {
            yourNavigation.removeClass(stickyDiv);
        }
    });
});