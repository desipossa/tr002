$(function () {
    const MMS = new Swiper('.main_menu_slide', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 80,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },

        speed: 5000,
    });

    const MIS = new Swiper('.main_interior_slide', {
        loop: true,
        effect: 'fade',
        pagination: {
            el: '.main_interior .page',
            clickable: true,
        },
        navigation: {
            nextEl: '.main_interior .next',
            prevEl: '.main_interior .prev',
        },
    });

    const MSS = new Swiper('.main_sns_slide', {
        loop: true,
        slidesPerView: 6,
        spaceBetween: 8,
        centeredSlides: true,
        navigation: {
            nextEl: '.main_sns .next',
            prevEl: '.main_sns .prev',
        },
    })
});


$(function () {

    //스크롤이 됐을 떄 header에 on을 붙인다.
    //스크롤이 0이면 header에서 on을 땐다.
    //event : click, scroll, wheel, mouseenter, mouseleave, change

    $(window).on('scroll', function () {
        //스크롤 된 양을 구함.
        let sct = $(window).scrollTop();
        console.log(sct)

        if (sct > 0) {
            $('#header').addClass('on')
        } else {
            $('#header').removeClass('on')
        }
    });


});


