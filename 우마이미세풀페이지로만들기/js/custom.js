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
        css3: false,

        onLeave: function (o, d, dr) {
            if (d == 1) {
                tl.restart();
            }
            if (d == 2 || d == 4) {
                $('#header').addClass('on')
            } else {
                $('#header').removeClass('on')
            }
        },
    });


    const main_solution_slide = new Swiper('.main_solution_slide', {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
    });


    $('#pomotion_movie').YTPlayer({
        videoURL: 'https://youtu.be/neNsNfxl2cs',
        containment: '#main_promotion',
        showControls: false,
        autoPlay: false,
        playOnlyIfVisible: true,
    });


    let sw = true;

    $('#main_promotion .cont button').on('click', function () {
        $(this).toggleClass('on');

        if (sw) {
            $('#pomotion_movie').YTPPause();
        } else {
            $('#pomotion_movie').YTPPlay();
        }

        sw = !sw;
    })

});