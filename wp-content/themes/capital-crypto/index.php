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

        <section class="analytics">
            <div class="swiper analytics__content">
                <ul class="swiper-wrapper analytics__content__list">
                    <!-- START GAINERS -->
                    <li class="swiper-slide analytics-wrapper analytics__item">
                        <div class="analytics__header">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/rocket.webp"
                                alt=""
                                width="14"
                                height="14">
                            <p>Top Gainers</p>
                        </div>
                        <ul class="analytics__list-gainers">
                            <?php for ($i = 0; $i <= 4; $i++) { ?>
                                <li class="analytics__item-gainers">
                                    <div class="analytics__gainers-info">
                                        <span class="analytics__gainers-count">40</span>
                                        <img src="<?= get_template_directory_uri(); ?>/assets/icons/virual.svg"
                                            alt=""
                                            width="18"
                                            height="18">
                                        <p class="analytics__gainers-name">
                                            VIRTUAL
                                            <span class="analytics__gainers-subname">Virtuals Protocol</span>
                                        </p>
                                    </div>
                                    <div class="analytics__gainers-price">
                                        <p class="analytics__gainers-price-current">$3.84</p>
                                        <p class="analytics__gainers-percent-current current-green">29.12%</p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <!-- END GAINERS -->

                    <!-- START graphics -->
                    <li class="swiper-slide crypto-analyze">
                        <ul class="crypto-analyze__list cryptocurrency__list">
                            <li class="analytics-wrapper cryptocurrency__item-block crypto-analyze__item">
                                <div class="crypto-analyze__block">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-percent">55.97%</p>
                                        <span class="crypto-analyze__block-percent-change current-green">+0.80%</span>
                                    </div>
                                </div>
                                <div class="cryptocurrency__item-change-graphics">
                                    <canvas id="dominanceChart" width="100" height="39"></canvas>
                                </div>
                            </li>

                            <li class="analytics-wrapper cryptocurrency__item-block crypto-analyze__item">
                                <div class="crypto-analyze__block">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-percent">55.97%</p>
                                        <span class="current-red">-0.80%</span>
                                    </div>
                                </div>
                                <div class="crypto-analyze__block">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-percent">55.97%</p>
                                        <span class="current-red">-0.80%</span>
                                    </div>
                                </div>
                            </li>
                            <li class="analytics-wrapper cryptocurrency__item-block crypto-analyze__item">
                                <div class="crypto-analyze__block">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-percent">55.97%</p>
                                        <span class="current-red">-0.80%</span>
                                    </div>
                                </div>
                                <div class="crypto-separator"></div>
                                <div class="crypto-analyze__block">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-percent">55.97%</p>
                                        <span class="current-red">-0.80%</span>
                                    </div>
                                </div>
                            </li>
                            <li class="analytics-wrapper cryptocurrency__item-block crypto-analyze__item">
                                <div class="crypto-analyze__block-circle">
                                    <div class="crypto-analyze__block-header">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bitcoin.png"
                                            alt=""
                                            width="13"
                                            height="13">
                                        <p class="crypto-analyze__block-title">Dominance</p>
                                    </div>
                                    <div class="crypto-analyze__block-meta">
                                        <p class="crypto-analyze__block-sub-title">Greed</p>
                                    </div>
                                </div>
                                <div class="crypto-analyze__update-meta">
                                    <p class="crypto-analyze__update-meta-text">Обновление: 17h 38m</p>
                                    <!-- <div class="circle">
                                        23%
                                    </div> -->
                                </div>
                                <div class="crypto-analyze__date">
                                    <div class="crypto-analyze__date-last">
                                        <p>51</p>
                                        <span>24h назад</span>
                                    </div>
                                    <div class="crypto-analyze__date-separator"></div>
                                    <div class="crypto-analyze__date-last">
                                        <p>49</p>
                                        <span>7d назад</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- END graphics -->

                    <!-- START cryptocurrency-->
                    <li class="swiper-slide cryptocurrency__item">
                        <ul class="cryptocurrency__list">
                            <?php for ($i = 0; $i <= 3; $i++) { ?>
                                <li class="analytics-wrapper cryptocurrency__item-block">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/pengu.webp"
                                        alt=""
                                        width="33"
                                        height="33">
                                    <div class="cryptocurrency__item-header">
                                        <p class="cryptocurrency__item-title">PENGU</p>
                                        <span class="cryptocurrency__item-info">Pudgy Penguins</span>
                                    </div>
                                    <div class="cryptocurrency__item-meta">
                                        <p class="cryptocurrency__item-meta__percent current-red">-5,35%</p>
                                        <p class="cryptocurrency__item-meta__top">90</p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <!-- END cryptocurrency-->
                </ul>
                <!-- point for slider -->
                <ul class="analytics-slider__points-lists swiper-pagination-custom">
                    <li class="recommend-slider__points-item">
                        <button data-slide="0"
                            class="recommend-slider__point">
                        </button>
                    </li>
                </ul>
                <!-- point for slider -->
            </div>
        </section>
  
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.analytics__content', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination-custom',
                        clickable: true,
                        renderBullet: function(index, className) {
                            return `<li class="recommend-slider__points-item ${className}">
                                    <button class="recommend-slider__point" data-slide="${index}"></button>
                                </li>`;
                        },
                        bulletClass: 'custom-bullet',
                        bulletActiveClass: 'custom-bullet-active'
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1250: {
                            slidesPerView: 3,
                            spaceBetween: 20,
                        }
                    }
                });

            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ctx = document.getElementById('dominanceChart').getContext('2d');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [
                            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
                            'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
                            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'
                        ],
                        datasets: [{
                            data: [
                                54.5, 55.1, 54.8, 55.4, 55.7, 55.8, 55.97,
                                56.2, 55.9, 56.4, 56.1, 55.7,
                                55.4, 54.9, 55.3, 55.6, 55.2, 54.8, 54.9, 55.0
                            ],
                            borderColor: '#007bff',
                            fill: true,
                            backgroundColor: 'rgba(0, 123, 255, 0.1)',
                            tension: 0.3,
                            pointRadius: 0, // Убирает точки
                            pointHoverRadius: 0 // Отключает точки при наведении
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                display: false
                            },
                            y: {
                                display: false
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            });
        </script>

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