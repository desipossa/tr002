$(function () {
    const main_visual_slide = new Swiper('.main_visual_slide', {
        loop: true,
        parallax: true,
        speed: 1000,
    });

    $('.main_visual .prev').on('click', function () {
        main_visual_slide.slidePrev();
    });

    $('.main_visual .next').on('click', function () {
        main_visual_slide.slideNext();
    });


    const main_customer_slide = new Swiper('.main_customer_slide', {
        loop: true,
        slidesPerView: 2.5,
        spaceBetween: 30,
    });

    $('.main_customer .prev').on('click', function () {
        main_customer_slide.slidePrev();
    });

    $('.main_customer .next').on('click', function () {
        main_customer_slide.slideNext();
    });

    let sw = true;
    $('.main_customer .play').on('click', function () {
        if (sw) {
            main_customer_slide.autoplay.start();
            $(this).addClass('on');
        } else {
            main_customer_slide.autoplay.pause();
            $(this).removeClass('on');
        }

        sw = !sw;
    });

});


$(function () {
    $(window).on('scroll', function () {
        let sct = $(window).scrollTop();

        if (sct > 0) {
            $('#header').addClass('on');
        } else {
            $('#header').removeClass('on');
        }
    });
});


$(function () {
    const lenis = new Lenis({
        autoRaf: true,
        duration: 2,
    });
});


$(function () {
    AOS.init();
});