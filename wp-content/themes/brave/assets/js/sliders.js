const swiper = new Swiper('.swiper', {
    slidesPerView: 1.1,
    spaceBetween: 0,
    freeMode: true,
    // Optional parameters
    //direction: 'vertical',
    //loop: true,

    // If we need pagination
    pagination: {
        el: '.demo-pagination',            
        type: "fraction",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});