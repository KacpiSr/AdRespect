// GSAP animation
gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.matchMedia({

    "(min-width: 1200px) and (max-width: 1920px) ": function () {
        gsap.to("#wave-home-2", {
            x: 0,
            y: 20,
            scrollTrigger: {
                trigger: "#wave-home-2",
                start: "top 90%",
                end: "top 10%",
                scrub: 1,
                markers: false,
            },
        });
        gsap.to("#wave-home-3", {
            x: 0,
            y: -50,
            scrollTrigger: {
                trigger: "#wave-home-3",
                start: "top 80%",
                end: "top 10%",
                scrub: 1.4,
                markers: false,
            },
        });
        gsap.to("#wave-home-4", {
                x: 0,
                y: -280,
                scrollTrigger: {
                    trigger: "#wave-home-4",
                    start: "top 110%",
                    end: "top 30%",
                    scrub: 4,
                    markers: false,
                    id: "scrub",
                },
            }),
            gsap.to("#wave-home-5", {
                x: 0,
                y: -180,
                scrollTrigger: {
                    trigger: "#wave-home-5",
                    start: "top 90%",
                    end: "top 40%",
                    scrub:2,
                    markers: false,
                    id: "scrub",
                },
            })
    },

});


if ($(window).width() > 1200) {

    const boxes = gsap.utils.toArray(".el-fadein-kladno");
    boxes.forEach((box, i) => {
      const anim = gsap.fromTo(
        box,
        { autoAlpha: 0, y: 70 },
        { duration: 1, autoAlpha: 1, y: 0 }
      );
      ScrollTrigger.create({
        trigger: box,
        animation: anim,
        once: false,
      });
    });

    let revealImageKladno = document.querySelectorAll(".reveal-kladno");
    revealImageKladno.forEach((container) => {
        let image = container.querySelector("img");
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: container,
                toggleActions: "restart none none reset"
            }
        });
        tl.set(container, {
            autoAlpha: 1
        });
        tl.from(image, 1.1, {
            scale: 1.1,
            delay: -1.5,
            ease: Power2.out
        });
    });
}