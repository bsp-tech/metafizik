
var resizeBanner = function(){
    let banner_height =$(window).height();
    $(".back_image").css("height",banner_height)
}

window.onresize = resizeBanner;
$('.back_image').ready(resizeBanner);

$(document).ready(function () {
    $(".down").click(function () {
            $('html, body').animate({
                scrollTop: $(".up").offset().top
            }, 1200);
    });
});

$(function () {
        var button = $(".clicknav");
        var mobilnav = $(".mobilnav");
        button.on("doubletap", function() {});
        button.click(function () {
            if (mobilnav.hasClass('open')) {
                mobilnav.removeClass('open');
                $(".mobilnav").css("background-color", "transparent");
            } else {
                mobilnav.addClass('open');
                $(".mobilnav").css("background-color", "#ab422a");
            }
        });
});