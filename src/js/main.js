$(".faq-questions .faq-item").click(function(a) {
    a.preventDefault();
    $(this).toggleClass("active");
});

$i = 1;
$('.continue-button').click(function(e) {
    e.preventDefault();
    $i++;
    $('.circle-' + $i).addClass('active');

    if ($('.circle-2').hasClass('active')) {
        $('.progression-bar').addClass('width30');
    }
    if ($('.circle-3').hasClass('active')) {
        $('.progression-bar').addClass('width55');
    }
    if ($('.circle-4').hasClass('active')) {
        $('.progression-bar').addClass('width78');
    }
    if ($('.circle-5').hasClass('active')) {
        $('.progression-bar').addClass('width100');
    }
});

$(".select-level .button-level").click(function(a) {
    a.preventDefault();
    $('.select-level .button-level').removeClass("active");
    $(this).addClass("active");
});

$(".offer-wrapper .button-level").click(function(a) {
    a.preventDefault();
    $('.offer-wrapper .button-level').removeClass("active");
    $(this).addClass("active");
});

$(".offer-item").click(function(a) {
    a.preventDefault();
    $('.offer-item').removeClass("active");
    $(this).addClass("active");
});

$(".days-wrapper a").click(function(a) {
    a.preventDefault();
    $(this).toggleClass("active");
});

$(document).ready(function() {

    // Menubar
    $(".menubar").click(function(e) {
        e.preventDefault();

        $(this).find("a").toggleClass("active");
        $(".header-inner").slideToggle();
    });
});

if ('.option-label input:checked+.checkmark'){
    $(this).addClass("active");
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});