<?php
custom_header();

$author_id = get_queried_object_id();
$author_name = get_the_author_meta('display_name', $author_id);
$author_avatar = get_avatar($author_id, 52, '', 'Фото автора ' . esc_attr($author_name), array('class' => 'write-post__header-img'));
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <?php yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>'); ?>

        <section class="settings">
            <form class="write-post__content" id="submit-post-form" method="post">
                <div class="write-post__header">
                    <?= $author_avatar; ?>
                    <span class="write-post__header-title"><?= esc_html($author_name); ?></span>
                </div>
                <input type="text" placeholder="Заголовок" name="post_title" class="write-post__title" required>

                <?php 
                echo do_shortcode('[fe_form id="354"]');
                ?>
                <div id="editorjs"></div>

                <button class="write-post__send" type="submit" name="submit_post">
                    Опубликовать
                </button>
            </form>
        </section>
    </main>
</div>

<?php custom_footer(); ?>
