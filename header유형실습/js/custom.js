$(function () {

    //스크롤이 됐을 떄 header에 on을 붙인다.
    //스크롤이 0이면 header에서 on을 땐다.
    //event : click, scroll, wheel, mouseenter, mouseleave, change

    $(window).on('scroll', function () {
        //스크롤 된 양을 구함.
        let sct = $(window).scrollTop();
        console.log(sct)

        if (sct > 0) {
            $('.header').addClass('on')
        } else {
            $('.header').removeClass('on')
        }
    });


});

$(function () {
    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });

    $(window).on('scroll', function () {
        //스크롤 된 양을 구함.
        let sct = $(window).scrollTop();
        console.log(sct)

        if (sct > 400) {
            $('.to_top').addClass('on')
        } else {
            $('.to_top').removeClass('on')
        }
    });

})


