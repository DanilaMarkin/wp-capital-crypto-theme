<?php
function custom_post_types()
{
    // Регистрируем тип записей "Статьи"
    register_post_type('articles', array(
        'labels' => array(
            'name' => 'Статьи',
            'singular_name' => 'Статья'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true, // Должно быть true!
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite' => array('slug' => 'articles'),
    ));

    // Регистрируем тип записей "Новости"
    register_post_type('news', array(
        'labels' => array(
            'name' => 'Новости',
            'singular_name' => 'Новость'
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true, // Должно быть true!
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite' => array('slug' => 'news'),
    ));
}
add_action('init', 'custom_post_types');
// Добавить в поддержку щаблона "Изображение записи"
add_theme_support('post-thumbnails');
