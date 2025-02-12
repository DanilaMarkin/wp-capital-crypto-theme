<?php
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';

// Подключение кастомных CSS стилей(начало)
function capital_crypto_enqueue_styles()
{
    // Подключаем основной стиль темы (style.css)
    wp_enqueue_style('capital-crypto-style', get_stylesheet_uri());
    // Подключаем глобальный CSS файл
    wp_enqueue_style("capital-crypto-global", get_template_directory_uri() . '/assets/css/global.css');
}
add_action("wp_enqueue_scripts", "capital_crypto_enqueue_styles");
// Подключение кастомных CSS стилей(конец)

// Кастомная шапка(начало)
function custom_header()
{
    get_template_part('templates/partials/head');
}
add_action('get_header', 'custom_header');
// Кастомная шапка(конец)

// Кастомный подвал(начало)
function custom_footer()
{
    get_template_part('templates/partials/footer');
}
add_action('get_footer', 'custom_footer');
// Кастомный подвал(конец)

// Кастомное меню(начало)
function custom_sidemenu()
{
    get_template_part("templates/partials/sidemenu");
}
add_action("get_sidemenu", "custom_sidemenu");
// Кастомное меню(конец)

// Регистрация меню(начало)
// Регистрация меню(конец)

// Добавление шаблона к постам(начало)
add_filter('theme_post_templates', function ($templates) {
    $templates['templates/articles/single.php'] = 'Payment and Delivery';

    return $templates;
});
// Добавление шаблона к постам(конец)
