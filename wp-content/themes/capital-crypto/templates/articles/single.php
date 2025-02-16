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
                        <span class="information__header-author-name"><?= $author_name; ?></span>
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
                </div>
            </div>
        </section>
    </main>
</div>

<?php
custom_footer();
?>