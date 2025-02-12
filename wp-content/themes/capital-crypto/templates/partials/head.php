<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="overlay"></div>
    <header class="header">
        <div class="header__container container">
            <!-- Логотип -->
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    CAPITAL <span class="header__logo-highlight">CRYPTO</span>
                </a>

                <a href="/" class="header__logo-mob-link">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="" class="header__logo-mob-img">
                </a>
            </div>

            <!-- Поиск -->
            <div class="header__search">
                <div class="header__search-wrapper" role="search">
                    <input
                        id="searchHeader"
                        type="search"
                        class="header__search-input"
                        placeholder="Поиск"
                        name="search"
                        aria-label="Поиск по сайту" />
                    <button type="submit" class="header__search-button" aria-label="Найти">
                        <img
                            src="<?= get_template_directory_uri(); ?>/assets/icons/search.svg"
                            alt="Иконка поиска"
                            class="header__search-button-icon" />
                    </button>
                </div>
                <div class="header__search-results">
                    <!-- TODO: Результат поиска -->
                </div>
            </div>

            <!-- Меню моб -->
            <div class="header__burger-menu">
                <button class="header__burger-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>