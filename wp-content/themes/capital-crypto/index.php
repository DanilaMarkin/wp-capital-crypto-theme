<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <h1 class="content__title">Главная страница Capital Crypto</h1>
        <section class="content__section content__section-news">
            <h2 class="content__section-title">Свежие новости</h2>
            <ul class="content__news-list">
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-1.svg" alt="" class="content__news-img">
                    <p>Виталик Бутерин рекомендует Soneium как перспективное решение второго уровня Ethereum</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-2.svg" alt="" class="content__news-img">
                    <p>Sony Запускает блокчейн Soneium На фоне споров о Memecoin</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-1.svg" alt="" class="content__news-img">
                    <p>Джастин Сан запускает USDD 2.0 с годовой доходностью 20%</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-2.svg" alt="" class="content__news-img">
                    <p>XRP достиг 7-летнего максимума выше 3 долларов, поскольку крупные держатели накопили токенов на 3,8 миллиарда долларов</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-3.svg" alt="" class="content__news-img">
                    <p>СРОЧНО: BitMEX оштрафован на 100 миллионов долларов за нарушение закона США об отмывании денег</p>
                </li>
            </ul>
            <button class="content__news-btn">
                Все новости
                <img src="<?= get_template_directory_uri(); ?>/assets/icons/all_news.svg" alt="">
            </button>
        </section>

        <section class="content__section-articles">
            <h2 class="content__section-title">Статьи</h2>
            <ul class="content__articles-list">
                <li class="content__articles-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/articles-1.png" alt="" class="content__articles-img">
                    <div class="content__articles_info">
                        <h3 class="content__articles-heading">Тенденции в блокчейне и стартапах WEB3: анализ на SOLAR</h3>
                        <p class="content__articles-text">В январе 2025 года начнётся продажа токенов проекта Solayer. Продажа начнётся 13 января в 13:00 по московском. test test test test</p>
                        <div class="content__articles-meta">
                            <div class="content__articles-date">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/watch.svg" alt="" class="content__articles-date-icon">
                                <p class="content__articles-date-text">11.01.2025</p>
                            </div>
                            <span class="content__articles-tag">#Трейдинг</span>
                        </div>
                    </div>
                </li>
                <li class="content__articles-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/articles-2.png" alt="" class="content__articles-img">
                    <div class="content__articles_info">
                        <h3 class="content__articles-heading">Тенденции в блокчейне и стартапах WEB3: анализ на SOLAR</h3>
                        <p class="content__articles-text">В январе 2025 года начнётся продажа токенов проекта Solayer. Продажа начнётся 13 января в 13:00 по московском. test test test test</p>
                        <div class="content__articles-meta">
                            <div class="content__articles-date">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/watch.svg" alt="" class="content__articles-date-icon">
                                <p class="content__articles-date-text">11.01.2025</p>
                            </div>
                            <span class="content__articles-tag">#Трейдинг</span>
                        </div>
                    </div>
                </li>
                <li class="content__articles-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/articles-3.png" alt="" class="content__articles-img">
                    <div class="content__articles_info">
                        <h3 class="content__articles-heading">Тенденции в блокчейне и стартапах WEB3: анализ на SOLAR</h3>
                        <p class="content__articles-text">В январе 2025 года начнётся продажа токенов проекта Solayer. Продажа начнётся 13 января в 13:00 по московском. test test test test</p>
                        <div class="content__articles-meta">
                            <div class="content__articles-date">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/watch.svg" alt="" class="content__articles-date-icon">
                                <p class="content__articles-date-text">11.01.2025</p>
                            </div>
                            <span class="content__articles-tag">#Трейдинг</span>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
</div>

<?php
custom_footer();
?>

<script>
    // Открытие и закрытие меню для моб устройств
    const burgerMenu = document.querySelector(".header__burger-menu-btn");
    const sideMenu = document.querySelector(".sidemenu");
    const headerMenu = document.querySelector(".header");

    burgerMenu.addEventListener("click", function() {
        sideMenu.classList.toggle("open");
        headerMenu.classList.toggle("open");
        this.classList.toggle("open");
    });

    // Открытие модального окна Войти
    const overlay = document.getElementById("overlay");
    const signInModal = document.getElementById("signIn");
    const signUpModal = document.getElementById("signUp");
    const signUpModalMail = document.getElementById("signUpModalMail");
    const signInModalMail = document.getElementById("signInModalMail");
    const openBtn = document.getElementById("openSignIn");

    openBtn.addEventListener("click", () => {
        signInModal.show(); // Открытие модального окна
        overlay.classList.add("active"); // Показываем затемнение
    });

    function closeModal() {
        signInModal.close(); // Закрытие модального окна
        signUpModal.close(); // Закрытие модального окна
        signUpModalMail.close(); // Закрытие модального окна
        signInModalMail.close(); // Закрытие модального окна
        overlay.classList.remove("active"); // Убираем затемнение
    }

    overlay.addEventListener("click", closeModal); // Закрытие окна по клику на затемнение

    // Переход из окна Войти в Регистрация
    const signUpOpen = document.querySelectorAll(".signin__not-account .sign__link");
    const signUpMail = document.getElementById("signUpMail");
    const signInMail = document.getElementById("signInMail");

    signUpOpen.forEach(item => {
        item.addEventListener("click", () => {
            signUpModal.show();
            signInModal.close();
            signInModalMail.close();
        });
    });

    signUpMail.addEventListener("click", () => {
        signUpModal.close();
        signInModal.close();
        signUpModalMail.show();
    });

    signInMail.addEventListener("click", () => {
        signUpModal.close();
        signInModal.close();
        signUpModalMail.close();
        signInModalMail.show();
    });

    // Смена видимости пароля в форме регистрация
    const passwordToggles = document.querySelectorAll(".modal__sign-password-btn");

    passwordToggles.forEach(toggleButton => {
        toggleButton.addEventListener("click", () => {
            const passwordInput = toggleButton.previousElementSibling;
            const eyeIcon = toggleButton.querySelector("img");
            const {
                imgVisible,
                imgHidden
            } = toggleButton.dataset;
            const isHidden = passwordInput.type === "password";

            passwordInput.type = isHidden ? "text" : "password";
            eyeIcon.src = isHidden ? imgVisible : imgHidden;
            toggleButton.setAttribute("aria-label", isHidden ? "Скрыть пароль" : "Показать пароль");
        });
    });
</script>