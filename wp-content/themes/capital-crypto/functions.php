<?php
require_once get_template_directory() . '/inc/walkers.php';
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

// Регистрация меню и подвала(начало)
function register_menus()
{
    register_nav_menus(array(
        "sidemenu" => __("Боковое меню"),
    ));
}
add_action("after_setup_theme", "register_menus");
// Регистрация меню и подвала(конец)

// Кастомная карта блока(начало)
function custom_cart()
{
    get_template_part("templates/partials/cart");
}
add_action("get_cart", "custom_cart");
// Кастомная карта блока(конец)

// Кастомная страница категории статьи и новости(начало)
function custom_article_category_template($template)
{
    if (is_tax('article_category')) {
        $new_template = locate_template('templates/articles/archive.php');
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'custom_article_category_template');
// Кастомная страница категории статьи и новости(конец)

// Добавление шаблона к постам(начало)
add_filter('theme_articles_templates', function ($templates) {
    $templates['templates/articles/single.php'] = 'Страница статьи';

    return $templates;
});
// Добавление шаблона к постам(конец)
