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
    ));
}
add_action('init', 'custom_taxonomies');