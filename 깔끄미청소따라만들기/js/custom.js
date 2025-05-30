$(function () {
    const main_slg_slide = new Swiper('.main_slg_slide', {
        loop: true,
        direction: 'vertical',
        spaceBetween: 120,
        speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            clickable: true,
            el: '.main_visual .page',
        },
    })
})

$(function () {
    $('.mbtn').on('click', function () {
        $('#header .gnb').toggleClass('on');
    })
})