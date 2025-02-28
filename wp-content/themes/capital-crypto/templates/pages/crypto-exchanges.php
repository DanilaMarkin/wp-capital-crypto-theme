<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <?php
        yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>');
        ?>
        <section class="crypto">
            <h1><?= the_title(); ?></h1>
            <div class="crypto__header">
                <p>Сравнение лучших бирж криптовалют по отзывам в 2025 году. На 16.01.2025 доступно 1202 криптобирж с общим объемом торгов - $ 167 млрд.</p>
                <p>По максимальному торговому обороту лидирует криптобиржа Binance с объемом - $ 24,8 млрд. На нее приходится 14.9% всего рынка.</p>
            </div>
            <div class="crypto-filter">
                <ul class="crypto-filter__list">
                    <?php for ($i = 0; $i <= 20; $i++) { ?>
                        <li class="crypto-filter__item">
                            <button class="crypto-filter__item-btn">
                                С бонусами
                            </button>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="crypto-table">
                <div class="crypto-table__header">
                    <ul class="crypto-table__row">
                        <li class="crypto-table__cell crypto-table__header-item">Биржа</li>
                        <li class="crypto-table__cell crypto-table__header-item">Пары</li>
                        <li class="crypto-table__cell crypto-table__header-item">Объем, 24ч</li>
                        <li class="crypto-table__cell crypto-table__header-item">На рынке</li>
                        <li class="crypto-table__cell crypto-table__header-item">Юрисдикция</li>
                    </ul>
                </div>
                <ul class="crypto-table__body">
                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                        <li class="crypto-table__row crypto-table__item">
                            <div class="crypto-table__cell crypto-table__exchange">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/bihance.png"
                                    alt=""
                                    width="47"
                                    height="47">
                                <div class="crypto-table__exchange-info">
                                    <p>Binance</p>
                                    <span>14 отзывов</span>
                                </div>
                            </div>
                            <div class="crypto-table__cell">
                                <p>1341</p>
                            </div>
                            <div class="crypto-table__cell">
                                <p>$ 25 млрд.</p>
                            </div>
                            <div class="crypto-table__cell">
                                8 лет
                            </div>
                            <div class="crypto-table__cell">
                                Cayman Islands
                            </div>
                            <div class="crypto-table__cell">
                                <a href="#" class="crypto-table__body-btn">
                                    Перейти
                                </a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="crypto-author">
                <div class="crypto-author__content">
                    <div class="crypto-author__preview">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/author.webp" alt="">
                        <p class="crypto-author__preview-title">Олег Артемьев</p>
                        <p class="crypto-author__preview-info">Автор сообщества <br> “Capital crypto”</p>
                    </div>
                    <div class="crypto-author__contact">
                        <div class="crypto-author__contact-info">
                            <p class="crypto-author__preview-title">Об авторе</p>
                            <p class="crypto-author__contact-text">Гланвый редактор Сapital crypto. Криптоинвестор с 2017 года, основатель образовательного проекта "Криптокапитал".
                            Автор более 150 исследований в области финансов и криптовалют.</p>
                        </div>
                        <ul class="crypto-author__contact__list">
                            <li class="crypto-author__contact__item">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/author_instagram.svg" alt="">
                                    <div class="crypto-author__contact__header">
                                        <p>150К</p>
                                        <span>подписчиков</span>
                                    </div>
                                </a>
                            </li>
                            <li class="crypto-author__contact__item">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/author_youtube.svg" alt="">
                                    <div class="crypto-author__contact__header">
                                        <p>500К</p>
                                        <span>подписчиков</span>
                                    </div>
                                </a>
                            </li>
                            <li class="crypto-author__contact__item">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/author_tiktok.svg" alt="">
                                    <div class="crypto-author__contact__header">
                                        <p>167К</p>
                                        <span>подписчиков</span>
                                    </div>
                                </a>
                            </li>
                            <li class="crypto-author__contact__item">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/author_telegram.svg" alt="">
                                    <div class="crypto-author__contact__header">
                                        <p>122К</p>
                                        <span>подписчиков</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="crypto-content">
                <?= the_content(); ?>
            </div>

        </section>
    </main>
</div>

<?php
custom_footer();
?>