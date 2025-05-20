$(function () {

    let tl = gsap.timeline();

    tl.from({}, {})
    tl.from('#main_intro .slg h2', { y: 140, opacity: 0 })
    tl.from('#main_intro .slg p', { y: 140, opacity: 0 })
    tl.from('#main_intro .slg .lnk', { y: 140, opacity: 0 })

    $('#full_wrap').fullpage({
        fixedElements: '#header , .side_lnk , .to_top',
        paddingTop: '80px',
        anchors: ['intro', 'store'],

        onLeave: function (o, d, dr) {
            if (d == 1) {
                tl.restart();
            }
            if (d == 2) {
                $('#header').addClass('on')
            } else {
                $('#header').removeClass('on')
            }
        },
    });

});