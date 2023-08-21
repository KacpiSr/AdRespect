$(document).ready(function () {
  const opinion = new Swiper(".mySwiper", {
    speed: 800,
    autoplay: {
      delay: 5000,
    },
    loop: true,

    navigation: {
      nextEl: ".swiper-header .swiper-button-next",
      prevEl: ".swiper-header  .swiper-button-prev",
    },

    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },

    // pagination: {
    //   el: ".swiper-pagination",
    //   type: "fraction",
    // },
  });
});