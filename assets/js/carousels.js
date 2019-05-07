$('#banner-dev-carousel').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    prevArrow: $("[data-carousel-prev='bannerdev']"),
    nextArrow: $("[data-carousel-next='bannerdev']"),
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});