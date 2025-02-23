<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content content-single">
        <?php
        yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>');
        ?>
        <section class="information">
            <div class="information__wrapper">
                <div class="information__header">
                    <div class="information__header-author">
                        <?php
                        // Получаем ID автора
                        $author_id = get_the_author_meta('ID');

                        // Получаем имя автора
                        $author_name = get_the_author();

                        // Получаем аватар пользователя (использует плагин User Profile Picture)
                        $author_avatar = get_avatar($author_id, 52, '', 'Фото автора ' . esc_attr($author_name), array('class' => 'information__header-author-img'));
                        ?>
                        <?= $author_avatar; ?>
                        <a href="<?= get_author_posts_url($author_id); ?>" class="information__header-author-name"><?= $author_name; ?></a>
                    </div>
                    <div class="information__header-date">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/watch.svg" alt="" class="information__header-date-img">
                        <span class="information__header-date-current"><?= get_the_date('j F Y года'); ?>
                        </span>
                    </div>
                </div>

                <div class="information__content">
                    <h1 class="content__title"><?= the_title(); ?></h1>
                    <?= the_content(); ?>

                    <!-- START information__bottom -->
                    <div class="information__bottom">
                        <?php
                        $categories = get_the_terms(get_the_ID(), 'article_category');
                        ?>
                        <ul class="information__bottom-categories">
                            <?php foreach ($categories as $category) { ?>
                                <li class="information__bottom-categories-item">
                                    <a href="<?= get_term_link($category); ?>">
                                        #<?= $category->name; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- share section -->
                        <div class="information__share">
                            <button class="information__share-btn">
                                <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-share.svg"
                                    class="information__share-img"
                                    alt="">
                            </button>

                            <!-- share popup -->
                            <div class="information__share-popup">
                                <ul class="information__share-popup-list">
                                    <li id="copyLink"
                                        class="information__share-popup-item">
                                        <button class="information__share-popup-action">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/link-icon.svg" alt="">
                                            <span>Копировать ссылку</span>
                                        </button>
                                    </li>
                                    <li id="copyLinkInTelegram"
                                        class="information__share-popup-item">
                                        <a
                                            href="https://t.me/share/url?url=<?= urlencode(get_permalink()); ?>"
                                            class="information__share-popup-action">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/share-in-tg.svg" alt="">
                                            <span>Поделиться в Telegram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- share popup -->
                        </div>
                        <!-- share section -->
                    </div>
                    <!-- END information__bottom -->
                </div>
            </div>
        </section>
    </main>

    <?php
    // Проверяем, есть ли категории
    if ($categories) {
        // Берем ID последней категории
        $last_term = end($categories); // Последний элемент массива
        $term_id = $last_term->term_id;

        // Запрос для получения всех постов типа 'articles' в той же категории
        $args = array(
            'post_type' => 'articles', // Кастомный тип записей
            'posts_per_page' => 12, // Количество постов (можно изменить по необходимости)
            'tax_query' => array(
                array(
                    'taxonomy' => 'article_category', // Кастомная таксономия
                    'field' => 'id',
                    'terms' => $term_id, // ID последней категории
                    'operator' => 'IN',
                    'include_children' => false,
                ),
            ),
            'post__not_in' => array(get_the_ID()), // Исключаем текущий пост
        );

        $query = new WP_Query($args);

        // Проверяем, есть ли посты
        if ($query->have_posts()) :
    ?>
            <section class="recommend-slider">
                <div class="recommend-slider__header">
                    <p class="recommend-slider__header-title">Рекомендуем почитать</p>
                    <div class="recommend-slider__header-arrow">
                        <button class="recommend-slider__arrow recommend-slider__arrow-left">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-recommend-slider.svg" alt="">
                        </button>
                        <button class="recommend-slider__arrow recommend-slider__arrow-right">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-recommend-slider.svg" alt="">
                        </button>
                    </div>
                </div>

                <div class="swiper recommend-slider__content">
                    <!-- post cart for slider -->
                    <ul class="swiper-wrapper">
                        <?php
                        while ($query->have_posts()) : $query->the_post();
                            custom_cart(); // Ваш метод отображения поста в слайдере
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <!-- post cart for slider -->

                    <!-- point for slider -->
                    <ul class="recommend-slider__points-lists swiper-pagination-custom">
                        <li class="recommend-slider__points-item">
                            <button data-slide="0"
                                class="recommend-slider__point">
                            </button>
                        </li>
                    </ul>
                    <!-- point for slider -->
                </div>
            </section>
    <?php
        endif;
    }
    ?>
</div>

<?php
custom_footer();
?>