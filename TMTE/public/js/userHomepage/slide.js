var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    spaceBetween: 1,
    slidesPerView: 2,
    loop: true,
    freeMode: true,
    loopAdditionalSlides: 5,
    speed: 500,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is >= 640px
      640: {
        slidesPerView: 5,
        slidesPerGroup: 2,
        freeMode: false
      }
    }
    
  })