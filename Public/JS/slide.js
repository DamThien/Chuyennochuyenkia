$(document).ready(function () {
    $('.img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        prevArrow: `<button type='button' class='slick-prev pull-left'><ion-icon 
        name="arrow-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next pull-right'><ion-icon 
        name='arrow-forward-outline'></ion-icon></button>`,
        autoplay: true,
        autoplaySpeed: 4000,
    });
});
