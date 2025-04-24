$(function () {
    $('#bgndVideo').YTPlayer({
        videoURL: 'https://youtu.be/2ol9odrzeoc',
        containment: '.main_visual',
        showControls: false,
    });

    $('#banner').YTPlayer({
        videoURL: 'https://youtu.be/2ol9odrzeoc',
        containment: '.main_banner',
        showControls: false,
        //autoPlay: false,
        playOnlyIfVisible: true,
    });


    let sw = true;

    $('.main_visual .con button').on('click', function () {
        if (sw) {
            $('#bgndVideo').YTPPause();
            $(this).addClass('on');
        } else {
            $('#bgndVideo').YTPPlay();
            $(this).removeClass('on');
        }

        sw = !sw;
    })
})