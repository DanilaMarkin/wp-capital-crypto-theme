<?php
// Получаем ID изображения записи
$image_id = get_post_thumbnail_id(get_the_ID());

// Получаем URL изображения
$image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');

// Получаем атрибуты title и alt
$image_title = get_the_title($image_id); // title изображения
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
?>
<li class="content__articles-item">
    <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>" title="<?= esc_attr($image_title); ?>" class="content__articles-img">
    <div class="content__articles_info">
        <a href="<?= get_permalink(); ?>">
            <h3 class="content__articles-heading">
                <?= get_the_title(); ?>
            </h3>
        </a>
        <p class="content__articles-text"><?= get_the_excerpt(); ?></p>
        <div class="content__articles-meta">
            <div class="content__articles-date">
                <img src="<?= get_template_directory_uri(); ?>/assets/icons/watch.svg" alt="" class="content__articles-date-icon">
                <p class="content__articles-date-text"><?= get_the_date('d.m.Y'); ?></p>
            </div>
            <span class="content__articles-tag">
                <?php
                $terms = get_the_terms(get_the_ID(), 'article_category');
                if ($terms && !is_wp_error($terms)) {
                    echo '#' . esc_html($terms[0]->name);
                }
                ?>
            </span>
        </div>
    </div>
</li>