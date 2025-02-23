document.addEventListener("DOMContentLoaded", function () {
    const shareBtn = document.querySelector(".information__share-btn");
    const sharePopup = document.querySelector(".information__share-popup");

    // Открытие и закрытие попапа
    shareBtn.addEventListener("click", () => {
        shareBtn.classList.toggle("active");
        sharePopup.classList.toggle("open");
    });
    
    document.addEventListener("click", (event) => {
        if(!sharePopup.contains(event.target) && !shareBtn.contains(event.target)) {
            shareBtn.classList.remove("active");
            sharePopup.classList.remove("open");
        }
    })

    const copyLinkBtn = document.getElementById("copyLink");

    // Копирование ссылки
    copyLinkBtn.addEventListener("click", () => {
        // Получаем текущий URL страницы
        const pageUrl = window.location.href;

        navigator.clipboard.writeText(pageUrl)
            .then(() => {
                shareBtn.classList.remove("active");
                sharePopup.classList.remove("open");
            })
            .catch(err => {
                console.error("Ошибка копирования: ", err);
            });

    });

    // Слайдер по статьям
    const swiper = new Swiper('.recommend-slider__content', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.recommend-slider__arrow-right',
            prevEl: '.recommend-slider__arrow-left',
        },
        pagination: {
            el: '.swiper-pagination-custom',
            clickable: true,
            renderBullet: function(index, className) {
                return `<li class="recommend-slider__points-item ${className}">
                <button class="recommend-slider__point" data-slide="${index}"></button>
            </li>`;
            },
            bulletClass: 'custom-bullet', // Кастомный класс для точек
            bulletActiveClass: 'custom-bullet-active' // Кастомный класс для активной точки
        },

        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });

});
