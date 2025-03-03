<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <h1>Профиль</h1>
        <?php
        $current_user = wp_get_current_user();
        // Получаем данные об авторе
        $author_id = get_queried_object_id();
        $author_name = get_the_author_meta('first_name', $author_id);
        $author_description = get_the_author_meta('description', $author_id);
        $author_avatar = get_avatar($author_id, 147, '', 'Фото автора ' . esc_attr($author_name), array('class' => 'author-profile__avatar'));

        $author_banner = get_the_author_meta('author_banner', $author_id);

        // Получаем дату регистрации
        $registered_date = get_the_author_meta('user_registered', $author_id);
        // Преобразуем дату в нужный формат
        $formatted_date = date_i18n('d.m.Y', strtotime($registered_date));
        ?>
        <section class="author-profile">
            <div class="author-banner">
                <?php
                // Если есть баннер, то его выводить на страницу иначе градиент
                if ($author_banner) { ?>
                    <img src="<?= $author_banner; ?>" alt="">
                <?php } else { ?>
                    <div class="author-banner-placeholder"></div>
                <?php } ?>
                <div class="author-banner__img-profile">
                    <?= $author_avatar; ?>
                </div>
            </div>
            <div class="author-information">
                <div class="author-information__account">
                    <div class="author-information__header">
                        <h2><?= $author_name; ?></h2>
                        <?php
                        // Если пользователь совпадает, то показывать системные настройки
                        if (is_user_logged_in() && $current_user->ID === $author_id) { ?>
                            <a href="<?= get_permalink(228); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/settings.svg" alt="">
                            </a>
                        <?php } ?>
                    </div>
                    <span>С <?= $formatted_date; ?></span>
                    <?php if ($author_description) { ?>
                        <p><?= $author_description; ?></p>
                    <?php } ?>
                </div>
                <div class="author-information__tabs">
                    <p class="author-information__tab active">Посты</p>
                    <?php
                    // Если пользователь совпадает, то показывать блок "Написать"
                    if (is_user_logged_in() && $current_user->ID === $author_id) { ?>
                        <div class="author-information__write">
                            <a href="<?= get_permalink(231); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/write-post.svg" alt="">
                                Написать
                            </a>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>
        <section class="author-posts">
            <div class="author-post__content">
                <ul class="content__articles-list">
                    <?php
                    // Параметры для WP_Query
                    $args = array(
                        'post_type' => 'articles', // Кастомный тип записей
                        'posts_per_page' => -1, // Количество постов на странице
                        'author' => $author_id, // Записи только текущего автора
                    );

                    // Создаем новый запрос
                    $query = new WP_Query($args);

                    // Проверяем наличие постов
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            custom_cart();
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>У этого автора пока нет публикаций.</p>';
                    endif;

                    // Восстанавливаем глобальную переменную поста
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </section>

    </main>
</div>

<?php
custom_footer();
?>