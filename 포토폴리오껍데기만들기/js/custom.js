$(function () {

    $('.wrapper').fullpage({
        anchors: ['intro', 'portfolio01', 'portfolio02', 'portfolio03', 'training', 'profile'],
        fixedElements: '#header, #footer',

        afterLoad: function (_, idx) {
            $('#header .gnb>ul>li').removeClass('on');
            $('#header .gnb>ul>li').eq(idx - 1).addClass('on');

            $('.section').removeClass('on');
            $('.section').eq(idx - 1).addClass('on');
        },


    });


    $('#header .cover_btn').on('click', function () {
        $(this).toggleClass('on');
        $('#header .cover').toggleClass('on');
    })
});


