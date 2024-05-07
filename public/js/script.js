
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
    slidesPerView: 1,
    spaceBetween: 40,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        }
    }
});

new Swiper(".available-items-section .swiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 5,
        },
        768: {
            slidesPerView: 5,
        },
        992: {
            slidesPerView: 6,
        },
        1200: {
            slidesPerView: 7,
        }
    }
});

new Swiper(".deals-and-discounts-section .swiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        }
    }
});

new Swiper(".top-brands-section .swiper", {
    slidesPerView: 4,
    spaceBetween: 15,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
            slidesPerView: 5,
        },
        992: {
            slidesPerView: 7,
        }
    }
});

new Swiper(".stories-section .swiper", {
    slidesPerView: 3,
    spaceBetween: 15,
    navigation: {
        nextEl: ".stories-section .swiper .swiper-button-next",
        prevEl: ".stories-section .swiper .swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 6,
            spaceBetween: 30,
        }
    }
});

new Swiper(".popular-items .swiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    navigation: {
        nextEl: ".popular-items .swiper .swiper-button-next",
        prevEl: ".popular-items .swiper .swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const filterButton = document.querySelector('.main-filter-button');
    const sidebar = document.querySelector('.sidebar-col');
    const crossIcon = document.querySelector('.cross-icon');

    filterButton.addEventListener('click', function() {
        sidebar.classList.toggle('open');
        if (sidebar.classList.contains('open')) {
            document.body.style.overflow = 'hidden'; // Disable scrolling on body
        } else {
            document.body.style.overflow = 'auto'; // Enable scrolling on body
        }
    });

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && !filterButton.contains(event.target)) {
            sidebar.classList.remove('open');
            document.body.style.overflow = 'auto'; // Enable scrolling on body
        }
    });

    crossIcon.addEventListener('click', function() {
        sidebar.classList.remove('open');
        document.body.style.overflow = 'auto'; // Enable scrolling on body
    });

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && !filterButton.contains(event.target)) {
            sidebar.classList.remove('open');
            document.body.style.overflow = 'auto'; // Enable scrolling on body
        }
    });
});

    



document.addEventListener("DOMContentLoaded", function() {
    const eyeIcons = document.querySelectorAll('.fa-eye, .fa-eye-slash');

    eyeIcons.forEach(icon => {
        icon.addEventListener('click', togglePasswordVisibility);
    });
});

function togglePasswordVisibility(event) {
    const targetId = event.target.getAttribute('data-target');
    const action = event.target.getAttribute('data-action');
    const passwordInput = document.getElementById(targetId);
    const showPasswordIcon = document.querySelector(`[data-target="${targetId}"][data-action="show"]`);
    const hidePasswordIcon = document.querySelector(`[data-target="${targetId}"][data-action="hide"]`);

    if (passwordInput && showPasswordIcon && hidePasswordIcon) {
        if (action === 'show') {
            passwordInput.type = 'text';
            showPasswordIcon.style.display = 'none';
            hidePasswordIcon.style.display = 'inline';
        } else if (action === 'hide') {
            passwordInput.type = 'password';
            hidePasswordIcon.style.display = 'none';
            showPasswordIcon.style.display = 'inline';
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const cart = document.querySelector('.side-shopping-cart');
    const cartIcon = document.querySelector('.shopping-cart-icon');
    const shoppingCartClosingIcon = document.querySelector('.shopping-cart-closing-icon');

    // Toggle the 'shopping-cart-open' class on button click
    cartIcon.addEventListener('click', function() {
        cart.classList.toggle('shopping-cart-open');
    });

    shoppingCartClosingIcon.addEventListener("click", function(){
        cart.classList.toggle('shopping-cart-open');
    });    
}); 






