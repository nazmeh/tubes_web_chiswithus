function scrolll() {
    var left = document.querySelector(".scroll-image");
    left.scrollBy(window.innerHeight, 0)
}

function scrollr() {
    var right = document.querySelector(".scroll-image");
    right.scrollBy(-window.innerHeight, 0)
}

$(window).scroll(function () {
    $("nav").toggleClass("scrolled", $(this).scrollTop() > 0);
});

$(window).scroll(function () {
    $("a").toggleClass("scrolled", $(this).scrollTop() > 0);
});

$(window).scroll(function () {
    $(".btn").toggleClass("scrolled", $(this).scrollTop() > 0);
});
