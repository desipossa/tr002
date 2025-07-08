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
    });


    const main_solution_slide01 = new Swiper('.main_solution_slide01', {
        loop: true,
        direction: "vertical",
        navigation: {
            nextEl: "#main_solution .solution_wrap .arrows .next",
            prevEl: "#main_solution .solution_wrap .arrows .prev",
        },
        pagination: {
            el: "#main_solution .solution_wrap .page",
            clickable: true,
        },
        on: {
            slideChangeTransitionStart: function () {
                $('#main_solution .solution_wrap .main_solution_slide01 .num').text('0' + (this.realIndex + 1))
            }
        }
    });
    const main_solution_slide02 = new Swiper('.main_solution_slide02', {
        loop: true,
        on: {
            slideChangeTransitionStart: function () {
                $('#main_solution .solution_wrap .main_solution_slide01 .num').text('0' + (this.realIndex + 1))
            }
        }
    });
    const main_solution_slide03 = new Swiper('.main_solution_slide03', {
        loop: true,
        allowTouchMove: false,
    });


    main_solution_slide01.controller.control = [main_solution_slide02, main_solution_slide03];
    main_solution_slide02.controller.control = [main_solution_slide01, main_solution_slide03];



})