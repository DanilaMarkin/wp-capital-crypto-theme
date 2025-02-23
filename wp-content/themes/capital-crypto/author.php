<?php get_header(); ?>

<main class="author-profile">
    <?php
    // Получаем данные об авторе
    $author_id = get_queried_object_id();
    $author_name = get_the_author_meta('display_name', $author_id);
    $author_description = get_the_author_meta('description', $author_id);
    $author_avatar = get_avatar($author_id, 100, '', 'Фото автора ' . esc_attr($author_name), array('class' => 'author-profile__avatar'));
    ?>

    <section class="author-profile__header">
        <?= $author_avatar; ?>
        <h1 class="author-profile__name"><?= esc_html($author_name); ?></h1>
        <?php if ($author_description) : ?>
            <p class="author-profile__description"><?= esc_html($author_description); ?></p>
        <?php endif; ?>
    </section>

    <section class="author-profile__posts">
        <h2>Публикации автора:</h2>
        <?php if (have_posts()) : ?>
            <ul class="author-profile__posts-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="author-profile__post-title"><?php the_title(); ?></a>
                        <p class="author-profile__post-excerpt"><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>У этого автора пока нет публикаций.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
