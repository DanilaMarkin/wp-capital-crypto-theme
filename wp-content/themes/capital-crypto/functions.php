<?php
require_once get_template_directory() . '/inc/walkers.php';
add_action('after_setup_theme', function () {
    require_once get_template_directory() . '/inc/post-types.php';
    require_once get_template_directory() . '/inc/taxonomies.php';
});

// Подключение кастомных CSS стилей(начало)
function capital_crypto_enqueue_styles()
{
    // Подключаем основной стиль темы (style.css)
    wp_enqueue_style('capital-crypto-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    // Подключаем глобальный CSS файл
    wp_enqueue_style('capital-crypto-global', get_template_directory_uri() . '/assets/css/global.css', array(), filemtime(get_template_directory() . '/assets/css/global.css'));
    // Подключаем CSS файл Swiper
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);
}
add_action("wp_enqueue_scripts", "capital_crypto_enqueue_styles");
// Подключение кастомных CSS стилей(конец)

// Подключение кастомных JS-скриптов (начало)
function capital_crypto_enqueue_scripts()
{
    // Подключаем глобальный JS файл с версией по времени изменения
    wp_enqueue_script('capital-crypto-global', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/main.js'), true);

    // Подключаем глобальный JS файл с версией по времени изменения
    wp_enqueue_script('capital-crypto-single', get_template_directory_uri() . '/assets/js/single.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/single.js'), true);

    // Подключаем JS файл для Swiper
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // Подключаем глобальный JS файл с версией по времени изменения
    wp_enqueue_script('capital-crypto-archive', get_template_directory_uri() . '/assets/js/archive.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/archive.js'), true);

    // Передаём параметры в JS
    wp_localize_script('capital-crypto-archive', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action("wp_enqueue_scripts", "capital_crypto_enqueue_scripts");
// Подключение кастомных JS-скриптов (конец)

// Кастомная шапка(начало)
function custom_header()
{
    get_template_part('templates/partials/head');
}
// Кастомная шапка(конец)

// Кастомный подвал(начало)
function custom_footer()
{
    get_template_part('templates/partials/footer');
}
// Кастомный подвал(конец)

// Кастомное меню(начало)
function custom_sidemenu()
{
    get_template_part("templates/partials/sidemenu");
}
// Кастомное меню(конец)

// Кастомная карта блока(начало)
function custom_cart()
{
    get_template_part("templates/partials/cart");
}
// Кастомная карта блока(конец)

// Регистрация меню и подвала(начало)
function register_menus()
{
    register_nav_menus(array(
        "sidemenu" => __("Боковое меню"),
    ));
}
add_action("after_setup_theme", "register_menus");
// Регистрация меню и подвала(конец)

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

// Кастомизация хлебных крошек, чтобы исключить "Статьи" и "Новости"(начало)
function remove_articles_from_breadcrumbs($links)
{
    foreach ($links as $key => $link) {
        // Если это ссылка на архив типа записей "articles", удаляем
        if (isset($link['text']) && $link['text'] == 'Статьи') {
            unset($links[$key]);
        }
    }
    return $links;
}
add_filter('wpseo_breadcrumb_links', 'remove_articles_from_breadcrumbs');
// Кастомизация хлебных крошек, чтобы исключить "Статьи" и "Новости"(конец)

// Добавление шаблона к постам(начало)
add_filter('theme_articles_templates', function ($templates) {
    $templates['templates/articles/single.php'] = 'Страница статьи';

    return $templates;
});
// Добавление шаблона к постам(конец)

// Добавление шаблона к страницам(начало)
add_filter('theme_page_templates', function ($templates) {
    $templates['templates/pages/404.php'] = '404';
    $templates['templates/pages/about-us.php'] = 'О нас';
    $templates['templates/pages/personal-data.php'] = 'Политика обработки персональных данных';
    $templates['templates/pages/privacy-policy.php'] = 'Политика конфиденциальности';
    $templates['templates/pages/terms-of-use.php'] = 'Правила использования ';

    return $templates;
});
// Добавление шаблона к страницам(конец)

// Кастомная страница 404(начало)
add_filter('template_include', function ($template) {
    if (is_404()) {
        return get_template_directory() . '/templates/pages/404.php';
    }
    return $template;
});
// Кастомная страница 404(конец)

// Загрузка статей по кнопке "Показать еще"(начало)
function load_more_posts()
{
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;

    // Количество записей на подгрузку
    $count_cart = 3;

    $args = array(
        'post_type'      => 'articles', // Кастомный тип записей
        'posts_per_page' => $count_cart,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'offset'         => $offset,
        'tax_query' => array(
            array(
                'taxonomy' => 'article_category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            custom_cart();
        endwhile;
        wp_reset_postdata();
    else :
        echo 'end';
    endif;

    wp_die(); // Обязательная строка для завершения запроса
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
// Загрузка статей по кнопке "Показать еще"(конец)
