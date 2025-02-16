<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <h1 class="content__title">Главная страница Capital Crypto</h1>
        <section class="content__section content__section-news">
            <h2 class="content__section-title">Свежие новости</h2>
            <ul class="content__news-list">
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-1.svg" alt="" class="content__news-img">
                    <p>Виталик Бутерин рекомендует Soneium как перспективное решение второго уровня Ethereum</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-2.svg" alt="" class="content__news-img">
                    <p>Sony Запускает блокчейн Soneium На фоне споров о Memecoin</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-1.svg" alt="" class="content__news-img">
                    <p>Джастин Сан запускает USDD 2.0 с годовой доходностью 20%</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-2.svg" alt="" class="content__news-img">
                    <p>XRP достиг 7-летнего максимума выше 3 долларов, поскольку крупные держатели накопили токенов на 3,8 миллиарда долларов</p>
                </li>
                <li class="content__news-item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/latest-news-3.svg" alt="" class="content__news-img">
                    <p>СРОЧНО: BitMEX оштрафован на 100 миллионов долларов за нарушение закона США об отмывании денег</p>
                </li>
            </ul>
            <button class="content__news-btn">
                Все новости
                <img src="<?= get_template_directory_uri(); ?>/assets/icons/all_news.svg" alt="">
            </button>
        </section>

        <section class="content__section-articles">
            <h2 class="content__section-title">Статьи</h2>
            <ul class="content__articles-list">
                <?php
                $args = array(
                    'post_type' => 'articles',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
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
        </section>
    </main>
</div>

<?php
custom_footer();
?>