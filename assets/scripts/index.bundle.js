/* Начало бургер-меню */
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.header__burger');
    const menu = document.querySelector('.header__menu');
    const body = document.body;

    burger.addEventListener('click', () => {
        const isActive = menu.classList.toggle('active'); // Переключаем класс 'active' только один раз
        burger.classList.toggle('active');

        if (isActive) {
            body.classList.add('no-scroll'); // Блокируем прокрутку
        } else {
            body.classList.remove('no-scroll'); // Разблокируем прокрутку
        }
    });

    document.addEventListener('click', (event) => {
        if (!menu.contains(event.target) && !burger.contains(event.target)) {
            menu.classList.remove('active');
            burger.classList.remove('active');
            body.classList.remove('no-scroll'); // Убираем класс при клике вне меню
        }
    });

    const menuLinks = document.querySelectorAll('.header__menu-item a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('active');
            burger.classList.remove('active');
            body.classList.remove('no-scroll'); // Убираем класс при клике на ссылку
        });
    });
});
/* Конец бургер-меню */

/* Блок до-после в секции hero */
document.addEventListener('DOMContentLoaded', () => {
    const divider = document.querySelector('[data-divider]');
    const beforeAfter = divider.parentElement;
    let isDragging = false;

    divider.addEventListener('mousedown', () => {
        isDragging = true;
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;

        const rect = beforeAfter.getBoundingClientRect();
        let offsetX = e.clientX - rect.left;
        let percentage = (offsetX / rect.width) * 100;

        percentage = Math.max(0, Math.min(100, percentage));
        beforeAfter.style.setProperty('--clip-position', `${percentage}%`);

        divider.style.left = `${percentage}%`;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });
});
/* Блок до-после в секции hero */

/* Анимация кнопки в форме ОС*/

document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.hero__btn');
    const img = button.querySelector('img');

    function playAnimation(direction = 'normal') {
        // Сначала сбрасываем анимацию
        img.style.animation = 'none';
        void img.offsetWidth; // Принудительно перерисовываем элемент (триггер рефлоу)
        img.style.animation = `arrowSlide 0.6s ease-in-out ${direction} forwards`;
    }

    button.addEventListener('mouseenter', () => {
        playAnimation('normal'); // Запускаем анимацию вперед
    });

    button.addEventListener('mouseleave', () => {
        playAnimation('reverse'); // Запускаем анимацию назад
    });
});

/* Анимация кнопки в форме ОС*/

/* Бесконечный текст */
document.querySelectorAll('.logos').forEach(function (logosContainer) {
    const copy = logosContainer.querySelector('.logos-slide').cloneNode(true);
    logosContainer.appendChild(copy);
});
/* Бесконечный текст */

/* Код слайдера */
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: false,
        on: {
            init: function () {
                updateSlideCounter(this);
            },
            slideChange: function () {
                updateSlideCounter(this);
            },
        },
        breakpoints: {
            1360: {
                slidesPerView: 2,
            },
        },
    });

    function updateSlideCounter(swiperInstance) {
        const totalSlides = swiperInstance.slides.length;
        const slidesPerView = swiperInstance.params.slidesPerView;
        let currentSlide;

        if (slidesPerView > 1) {
            currentSlide = Math.min(
                swiperInstance.realIndex + slidesPerView,
                totalSlides
            );
        } else {
            currentSlide = swiperInstance.realIndex + 1;
        }

        document.querySelector(".current-slide").textContent = currentSlide;
        document.querySelector(".total-slides").textContent = totalSlides;
    }
});
/* Код слайдера */


/* Код канвас-регистрации */
document.addEventListener("DOMContentLoaded", function () {
    const openButton = document.querySelector("[data-request]");
    const closeButton = document.getElementById("closeOffCanvas");
    const overlay = document.getElementById("overlay");
    const offCanvas = document.getElementById("offCanvas");

    openButton.addEventListener("click", function () {
        offCanvas.classList.add("open");
        overlay.style.display = "block";
    });

    closeButton.addEventListener("click", closeOffCanvas);
    overlay.addEventListener("click", closeOffCanvas);

    function closeOffCanvas() {
        offCanvas.classList.remove("open");
        overlay.style.display = "none";
    }

    const form = document.getElementById("offCanvasForm");
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone").value;

        closeOffCanvas();
    });
});
/* Код канвас-регистрации */
