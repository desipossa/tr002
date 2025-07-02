$(function () {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.doc02',
            pin: true,
            start: 'top top',
            end: '+=2000',
            scrub: 1,
            markers: true,
        }
    });
    tl
        .to('.doc02 .photo', {
            width: 300,
            height: 450,
            borderRadius: 16
        })
        .to('.doc02 .inv', {
            width: 300,
            height: 450,
            borderRadius: 16,
        }, '<')
        .to('.doc02 .cover', {
            width: 300,
            height: 450,
            borderRadius: 16,
        })

        .to('.doc02 .cover', {
            opacity: 1
        })
        .to('.doc02 .inv', {
            opacity: 1,
        }, '<')
        .to('.doc02 .txt span', {
            opacity: 1,
            x: 200
        })
        .to('.doc02 .txt strong', {
            opacity: 1,
            x: -200
        })
})