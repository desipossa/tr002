

$(function () {
    $('.mbtn').on('click', function () {
        $(this).toggleClass('is-active')
        $('.gnb').toggleClass('on')
        /*active를 붙여도 된다. 일반적으로는 on 사용한다.*/
        $('#header .hd_wrap h1').toggleClass('on')
    })
});

$(function () {
    const main_new_slide = new Swiper('.main_new_slide', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: {
            delay: 2400,
            disableOnInteraction: false,
        },
        speed: 800,
        pagination: {
            el: '.main_new_slide .page',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            }
        },
        breakpoints: {
            // 화면 너비가 1024px 이하일 때
            1442: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            // 화면 너비가 768px 이하일 때
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            // 화면 너비가 480px 이하일 때
            480: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            0: {
                slidesPerView: 1,
            },
        }
    });
});
