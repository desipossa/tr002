$(function () {
    const main_visual_slide = new Swiper('.main_visual_slide', {
        loop: true,
        effect: "fade",
        speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: "#main_visual .arrows .next",
            prevEl: "#main_visual .arrows .prev",
        },
    });

    const main_menu_slide = new Swiper('.main_menu_slide', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 16,
        speed: 900,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    })
})