<?php
custom_header();

$author_id = get_the_author_meta('ID');
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
                <!-- Контейнер для Editor.js -->
                <div id="editorjs"></div>
                <input type="hidden" name="post_content" id="post_content">
                <!-- Загрузка изображения -->
                <input type="file" name="post_thumbnail" accept="image/*">
                <input type="hidden" name="post_nonce" value="<?= wp_create_nonce('submit_post_nonce'); ?>">

                <button class="write-post__send" type="submit" name="submit_post">
                    Опубликовать
                </button>
            </form>
        </section>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@2"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@2.7.6/dist/quote.umd.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@2"></script>

<?php custom_footer(); ?>