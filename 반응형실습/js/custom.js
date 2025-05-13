$(function () {
    $('.mbtn').on('click', function () {
        $(this).toggleClass('on');
        $('#header .gnb').toggleClass('on')
    });


    $('#header .gnb>ul>li>a').on('click', function (e) {
        if ($('#header .gnb').hasClass('on') && $(this).next().is('ul')) {
            e.preventDefault();
            $('#header .gnb>ul>li ul').stop().slideUp();
            $(this).next().stop().slideDown()
        }

    });

    $(window).on('resize', function () {
        $('#header .gnb').removeClass('on');
        $('.mbtn').removeClass('on');
        $('#header .gnb>ul>li ul').removeAttr('style')

    })


})