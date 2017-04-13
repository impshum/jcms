$(function() {
    $('body').removeClass('fade-out');
});

var gettitle1 = document.title;
var fixtitle1 = gettitle1.replace(/\_/g, ' ');
$('#pagetitle1').html(fixtitle1);

AOS.init({})

function openNav() {
    $('#nav').css('height', '90%');
}

$('.read').click(function(e) {
    $(this).toggleClass('readdown');
    $(this).parent().children('.posted').toggle();
    $(this).parent().children('.shareit').toggle();
    $(this).parent().children('.flippy').toggleClass('whoaflippy');
    $(this).parent().toggleClass('open');
    $(this).parent().last('.fadeout').toggleClass('whoablog');
    $(this).text(function(i, text) {
        return text === "read less" ? "read more" : "read less";
    })
    $(this).parent().get(0).scrollIntoView();
    document.body.scrollTop -= 30;
});

$('.wait').click(function(e) {
    $('#nav').css('height', '0%');
    e.preventDefault();
    var goTo = this.getAttribute("href");
    setTimeout(function() {
        window.location = goTo;
    }, 500);
});

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});
