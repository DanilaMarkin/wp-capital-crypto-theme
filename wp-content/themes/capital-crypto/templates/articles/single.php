<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
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
                        <a href class="information__header-author-name"><?= $author_name; ?></a>
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

                        if (!empty($categories) && !is_wp_error($categories)) {
                            $categories = array_reverse($categories);
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
                        <?php } ?>
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
                                    <li class="information__share-popup-item">
                                        <button class="information__share-popup-action">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/link-icon.svg" alt="">
                                            <span>Копировать ссылку</span>
                                        </button>
                                    </li>
                                    <li class="information__share-popup-item">
                                        <a href="/" class="information__share-popup-action">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/share-in-tg.svg" alt="">
                                            <span>Поделиться в Telegram</span>
                                        </a>
                                    </li>
                                    <li class="information__share-popup-item">
                                        <button class="information__share-popup-action">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/repeat-post.svg" alt="">
                                            <span>Ответить на пост</span>
                                        </button>
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
</div>

<?php
custom_footer();
?>