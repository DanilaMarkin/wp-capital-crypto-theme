<?php
function custom_taxonomies()
{
    // Категории для статей
    register_taxonomy('article_category', 'articles', array(
        'labels'            => array(
            'name'              => __('Категории статей', 'textdomain'),
            'singular_name'     => __('Категория статьи', 'textdomain'),
        ),
        'public'            => true,
        'hierarchical'      => true, 
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'article-category'),
        'show_in_nav_menus' => true,
        'show_in_rest'      => true, // Включаем поддержку Gutenberg
    ));

    // Теги для статей
    register_taxonomy('article_tag', 'articles', array(
        'labels'            => array(
            'name'              => __('Теги статей', 'textdomain'),
            'singular_name'     => __('Тег статьи', 'textdomain'),
        ),
        'public'            => true,
        'hierarchical'      => false, 
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'article-tag'),
        'show_in_rest'      => true, // Включаем поддержку Gutenberg
    ));

    // Категории для новостей
    register_taxonomy('news_category', 'news', array(
        'labels'            => array(
            'name'              => __('Категории новостей', 'textdomain'),
            'singular_name'     => __('Категория новости', 'textdomain'),
        ),
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'news-category'),
        'show_in_nav_menus' => true,
        'show_in_rest'      => true, // Включаем поддержку Gutenberg
    ));

    // Теги для новостей
    register_taxonomy('news_tag', 'news', array(
        'labels'            => array(
            'name'              => __('Теги новостей', 'textdomain'),
            'singular_name'     => __('Тег новости', 'textdomain'),
        ),
        'public'            => true,
        'hierarchical'      => false,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'news-tag'),
        'show_in_rest'      => true, // Включаем поддержку Gutenberg
    ));
}
add_action('init', 'custom_taxonomies');