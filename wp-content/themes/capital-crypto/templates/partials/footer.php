<footer>
    <div class="container">
        <div class="footer__conainer">
            <div class="footer__menu">
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <a href="" class="footer__menu-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/crypto_exchanges.svg" alt="">
                            <p>Криптобиржи</p>
                        </a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="" class="footer__menu-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/exchange_rates.svg" alt="">
                            <p>Курсы валют</p>
                        </a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="" class="footer__menu-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/teach.svg" alt="">
                            <p>Обучение</p>
                        </a>
                    </li>
                    <li>
                        <button id="openSignIn" class="footer__menu-btn">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/author_profile.svg" alt="">
                            Профиль автора
                        </button>
                    </li>
                    <?php if (get_permalink(104)) { ?>
                        <li class="footer__menu-link-policy-item">
                            <a href="<?= get_permalink(104); ?>" class="footer__menu-link-policy">
                                Политика конфиденциальности 
                            </a>
                        </li>
                    <?php } ?>
                </ul>

                <ul class="footer__social-list">
                    <li class="footer__social-item">
                        <a href="<?= get_permalink(125); ?>" class="footer__social-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/about_us.svg" alt="">
                            <p>О нас</p>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="" class="footer__social-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="">
                            <p>Instagram</p>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="" class="footer__social-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/telegram.svg" alt="">
                            <p>Telegram</p>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="" class="footer__social-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt="">
                            <p>YouTube</p>
                        </a>
                    </li>
                </ul>

                <div class="footer__meta">
                    <ul class="footer__meta-list">
                        <li class="footer__meta-item">
                            <p>Последнее обновление данных: 19.01.2025</p>
                        </li>
                        <li class="footer__meta-item">
                            <p>©2025 Capital crypto | Все права защищены.</p>
                        </li>
                        <li class="footer__meta-item">
                            <p>Не оказывает фиrнансовых услуг.</p>
                            <p>Вся информация представленная на сайте носит ознакомительный характер.</p>
                        </li>
                        <li class="footer__meta-item">
                            <p>На сайте используются cookie для сбора статической информации.</p>
                        </li>
                    </ul>
                    <ul class="footer__general">
                        <?php if (get_permalink(178)) { ?>
                            <li class="footer__general-item">
                                <a href="<?= get_permalink(178); ?>" class="footer__general-link">
                                    Правила использования 
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_permalink(180)) { ?>
                            <li class="footer__general-item">
                                <a href="<?= get_permalink(180); ?>" class="footer__general-link">
                                    Политика обработки персональных данных
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- modal sign-in -->
    <dialog id="signIn" class="modal__sign">
        <p class="signin__title">Вход в аккаунт</p>
        <div class="signin__wrapper">
            <ul class="signin__wrapper-list">
                <li class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/google.svg" alt="">
                    <a href="https://capital-crypto.net/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">Продолжить с Google</a>
                </li>
                <li class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/apple.svg" alt="">
                    <span>Продолжить с Apple</span>
                </li>
                <li id="signInMail" class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="">
                    <span>Почта</span>
                </li>
            </ul>
        </div>
        <span class="signin__not-account">
            Нет аккаунта?
            <button id="signUpOpen" class="sign__link">Регистрация</button>
        </span>
    </dialog>
    <!-- modal sign-in -->

    <!-- modal sign-up -->
    <dialog id="signUp" class="modal__sign">
        <p class="signin__title">Регистрация</p>
        <div class="signin__wrapper">
            <ul class="signin__wrapper-list">
                <li class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/google.svg" alt="">
                    <a href="https://capital-crypto.net/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">Продолжить с Google</a>
                </li>
                <li class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/apple.svg" alt="">
                    <span>Продолжить с Apple</span>
                </li>
                <li id="signUpMail" class="signin__wrapper-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="">
                    <span>Почта</span>
                </li>
            </ul>
        </div>
        <div class="signup__condition">
            <span>Регистрируясь, вы соглашаетесь</span>
            <span>
                с
                <a href="/" class="sign__link">условиями использования</a>
            </span>
        </div>
    </dialog>
    <!-- modal sign-up -->

    <!-- modal sign-up mail -->
    <dialog id="signUpModalMail" class="modal__sign">
        <p class="signin__title">Регистрация</p>
        <div class="signin__wrapper">
            <form class="signin__wrapper-list" id="signUpForm">
                <input id="nameSignUp" name="nameSignUp" type="text" placeholder="Имя" required>
                <input id="emailSignUp" name="emailSignUp" type="email" placeholder="Почта" required>
                <div class="signin__wrapper-password">
                    <input id="passwordSignUp" name="passwordSignUp" type="password" placeholder="Пароль" required>
                    <button type="button" class="modal__sign-password-btn" aria-label="Показать пароль"
                        data-img-visible="<?= get_template_directory_uri(); ?>/assets/icons/eye_visible.svg"
                        data-img-hidden="<?= get_template_directory_uri(); ?>/assets/icons/eye_not_visible.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/icons/eye_not_visible.svg"
                            alt="Скрыто" class="modal__sign-password-btn-eye">
                    </button>
                </div>
                <button class="modal__sign-btn" type="submit">
                    Зарегистрироваться
                </button>
            </form>
        </div>
        <div class="signup__condition">
            <span>Регистрируясь, вы соглашаетесь</span>
            <span>с <a href="/" class="sign__link">условиями использования</a></span>
        </div>
    </dialog>
    <!-- modal sign-up mail -->

    <!-- modal sign-in mail -->
    <dialog id="signInModalMail" class="modal__sign">
        <p class="signin__title">Вход в аккаунт</p>
        <div class="signin__wrapper">
            <form class="signin__wrapper-list" id="signInForm">
                <input id="emailSignIn" name="emailSignIn" type="email" placeholder="Почта" required>
                <div class="signin__wrapper-password">
                    <input id="passwordSignIn" name="passwordSignIn" type="password" placeholder="Пароль" required>
                    <button type="button" class="modal__sign-password-btn" aria-label="Показать пароль"
                        data-img-visible="<?= get_template_directory_uri(); ?>/assets/icons/eye_visible.svg"
                        data-img-hidden="<?= get_template_directory_uri(); ?>/assets/icons/eye_not_visible.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/icons/eye_not_visible.svg"
                            alt="Скрыто" class="modal__sign-password-btn-eye">
                    </button>
                </div>
                <button class="modal__sign-btn" type="submit">
                    Войти
                </button>
            </form>
        </div>
        <span class="signin__not-account">
            Нет аккаунта?
            <button id="signUpOpen" class="sign__link">Регистрация</button>
        </span>
    </dialog>
    <!-- modal sign-in mail -->
</footer>

<!-- Подключение admin-bar -->
<?php wp_footer(); ?>
<!-- Подключение admin-bar -->
<?php
$current_user = wp_get_current_user();
if ( is_user_logged_in() ) {
    echo 'Привет, ' . esc_html( $current_user->display_name ) . '!';
} else {
    echo 'Привет, гость!';
}
?>

</body>

</html>