
new Swiper("#new-products .swiper", {
    slidesPerView: 3,
    lazyLoading: true,
    keyboard: {
        enabled: true,
    },    
    pagination: {
        el: ("#swiper-1 .swiper-custom-pagination"),
        clickable: true,
        renderBullet: function(index, className) {
        return `<div class=${className}>
            <span class="line"></span>
            </div>`;
        }
    },
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        0: {
        slidesPerView: 1,
        spaceBetween: 20,
        },
        768: {
        slidesPerView: 3,
        spaceBetween: 50,
        },
    },
});

new Swiper(".daily-deals-section .swiper", {
    slidesPerView: 3,
    spaceBetween: 40,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".available-items-section .swiper", {
    slidesPerView: 7,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".deals-and-discounts-section .swiper", {
    slidesPerView: 3,
    spaceBetween: 15,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".top-brands-section .swiper", {
    slidesPerView: 7,
    spaceBetween: 15,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".stories-section .swiper", {
    slidesPerView: 6,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});




