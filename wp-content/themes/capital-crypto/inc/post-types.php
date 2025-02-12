<?php
function custom_post_types()
{
    // Регистрация типа "Статьи"
    register_post_type('articles', array(
        'labels'      => array(
            'name'          => __('Статьи', 'textdomain'),
            'singular_name' => __('Статья', 'textdomain'),
        ),
        'public'      => true,
        'has_archive' => true,
        'rewrite'     => array('slug' => 'articles'),
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'author', 'revisions'),
        'taxonomies'  => array(), // Таксономии добавим отдельно
    ));

    // Регистрация типа "Новости"
    register_post_type('news', array(
        'labels'      => array(
            'name'          => __('Новости', 'textdomain'),
            'singular_name' => __('Новость', 'textdomain'),
        ),
        'public'      => true,
        'has_archive' => true,
        'rewrite'     => array('slug' => 'news'),
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'author', 'revisions'),
        'taxonomies'  => array(), // Таксономии добавим отдельно
    ));
}
add_action('init', 'custom_post_types');
