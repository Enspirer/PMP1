var swiper = new Swiper(".swiper-container", {
    // spaceBetween: -100,
    autoplay: 3000,
    loop: true,
    slidesPerView: 10,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 8,
        },
        1820: {
            slidesPerView: 13,
        },
    },
});