$(function () {
    $('.main_visual_slide').slick({
        arrows: false,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 6000,
        speed: 1000,
    });


    $('.main_visual .arrows .prev').on('click', function () {
        $('.main_visual_slide').slick('slickPrev');
    });

    $('.main_visual .arrows .next').on('click', function () {
        $('.main_visual_slide').slick('slickNext');
    });


    $('.main_product_slide').slick({
        slidesToShow: 4,
        arrows: false,
        dots: true,
    });


    $('.main_product .arrows .prev').on('click', function () {
        $('.main_product_slide').slick('slickPrev');
    });

    $('.main_product .arrows .next').on('click', function () {
        $('.main_product_slide').slick('slickNext');
    });

});


$(function () {
    $('.main_content .tab_menu button').on('click', function () {
        let idx = $(this).index(); // 클릭한 것의 번호를 가져와서 저장함
        console.log(idx);

        $('.main_content .tab_menu button').removeClass('on');
        $(this).addClass('on');

        $('.main_content .tab_content .con').removeClass('on');
        $('.main_content .tab_content .con').eq(idx).addClass('on');
    });
});


$(function () {
    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 1000)
    })
});

$(function () {
    $('.footer #lnk').on('change', function () {
        let lnk = $(this).val();
        if (lnk) {
            window.open(lnk)
        }
    })
})