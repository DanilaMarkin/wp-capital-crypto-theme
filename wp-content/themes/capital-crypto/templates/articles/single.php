<?php
/**
 * Template Name: Кастомный шаблон для поста
 * Template Post Type: post
 */
get_header(); ?>

<main>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </article>
</main>

<?php get_footer(); ?>
