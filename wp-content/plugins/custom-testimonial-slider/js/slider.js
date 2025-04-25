jQuery(document).ready(function($) {
    $('.cts-slider').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        dots: true, // 🔁 This enables the loop
        loop: true,     // (optional, not needed for Slick but fine if you use Swiper instead)
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '20px'
                }
            }
        ]
    });
});
