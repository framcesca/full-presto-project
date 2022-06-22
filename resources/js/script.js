// import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 10,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        800: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 75,
        },
    },    
});