$(function () {

    let tl = gsap.timeline();
    tl.from('.intro h2', { x: 1000, opacity: 0 })
    tl.from('.intro p', { x: 1000, opacity: 0 })

    $('.full_wrap').fullpage({
        // navigation: true,
        anchors: ['intro', 'portfolio01', 'portfolio02', 'portfolio03', 'profile'],
        fixedElements: '.header',
        afterLoad: function (a, b) {
            console.log(a, b);
            $('.gnb ul li').removeClass('on');
            $('.gnb ul li').eq(b - 1).addClass('on');


            $('.section').removeClass('on');
            $('.section').eq(b - 1).addClass('on');

            if (b === 1) {
                tl.restart();
            }
        },
    });




})