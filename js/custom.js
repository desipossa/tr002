$(function () {
    $('.main_visual .main_visual_slide').slick({
        autoplay: true,
        pauseOnHover: false,
        arrows: false,
    });

    $('.main_visual .arrows .prev').on('click', function () {
        $('.main_visual .main_visual_slide').slick('slickPrev')
    });
    $('.main_visual .arrows .next').on('click', function () {
        $('.main_visual .main_visual_slide').slick('slickNext')
    });
})