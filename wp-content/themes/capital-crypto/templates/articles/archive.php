<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <?php
        yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>');
        ?>
        <h1 class="content__title"><?= single_term_title('', false);  ?></h1>
        <section class="categories">
            <?php
            $parent_id = get_queried_object_id(); // Получаем ID текущей категории

            // Получаем подкатегории текущей категории
            $subcategories = get_terms([
                'taxonomy'   => 'article_category', // Указываем таксономию категорий статей
                'parent'     => $parent_id, // Только подкатегории текущей
                'hide_empty' => false, // Показываем даже пустые категории
            ]);

            // Проверяем, есть ли подкатегории
            if (!empty($subcategories)) { ?>
                <div class="categories__tag">
                    <ul class="categories__tag-list">
                        <?php
                        foreach ($subcategories as $subcategory) {
                            // Проверяем, является ли подкатегория текущей
                            $is_active = (is_tax('article_category', $subcategory->term_id)) ? 'active' : '';

                        ?>
                            <li class="categories__tag-item <?= esc_attr($is_active); ?>">
                                <a href="<?= get_term_link($subcategory); ?>" class="categories__tag-link">
                                    <?= esc_html($subcategory->name); ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <div class="categories__cart">
                <ul class="content__articles-list">
                    <?php
                    // Получаем текущий объект категории
                    $current_category = get_queried_object();
                    // Кол-во выводимых статей и зн-ие для offset
                    $count_cart = 3;

                    // Получаем номер страницы из URL или 1 по умолчанию
                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                    // Вычисляем offset
                    $offset = ($current_page - 1) * $count_cart;

                    $args = array(
                        'post_type'      => 'articles', // Кастомный тип записей
                        'posts_per_page' => $count_cart, // Вывести все записи
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'offset'         => $offset,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'article_category',
                                'field' => 'term_id',
                                'include_children' => false,
                                'terms'    => $current_category->term_id,
                            ),
                        ),
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            custom_cart();
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Записей пока нет.</p>';
                    endif;
                    ?>
                </ul>

                <?php
                // Проверяем, есть ли статьи для следующей страницы
                $total_posts = $query->found_posts;
                if ($total_posts > $count_cart) {
                    $next_offset = $offset + $count_cart;
                ?>
                    <button
                        id="loadMorePost"
                        class="categories__cart-all-btn"
                        data-offset="<?= $next_offset; ?>"
                        data-category="<?= $current_category->term_id; ?>">
                        Показать еще
                    </button>
                <?php } ?>
            </div>
        </section>
    </main>
</div>

<?php
custom_footer();
?>