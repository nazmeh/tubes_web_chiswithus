function scrolll() {
    var left = document.querySelector(".scroll-image");
    left.scrollBy(window.innerHeight, 0)
}

function scrollr() {
    var right = document.querySelector(".scroll-image");
    right.scrollBy(-window.innerHeight, 0)
}

$(window).scroll(function() {
    $("nav").toggleClass("scrolled", $(this).scrollTop() > 0);
});

$(window).scroll(function() {
    $("a").toggleClass("scrolled", $(this).scrollTop() > 0);
});

$(window).scroll(function() {
    $(".btn").toggleClass("scrolled", $(this).scrollTop() > 0);
});

function toggleLabelClass(radioButton) {
    var label = document.querySelector('label[for="' + radioButton.id + '"]');
    var otherRadios = document.querySelectorAll('input[type="radio"]:not(#' + radioButton.id + ')');

    if (radioButton.checked) {
        label.classList.add("timeReservationActive");
    } else {
        label.classList.remove("timeReservationActive");
    }

    otherRadios.forEach(function(otherRadio) {
        var otherLabel = document.querySelector('label[for="' + otherRadio.id + '"]');
        otherLabel.classList.remove("timeReservationActive");
    });
}