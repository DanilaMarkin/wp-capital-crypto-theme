<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <h1>Профиль</h1>
        <section class="author">
            <div class="author-banner">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 20.png" alt="">
                <div class="author-banner__img-profile">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/123.jpg" alt="">
                </div>
            </div>
            <div class="author-information">
                <div class="author-information__account">
                    <div class="author-information__header">
                        <h2>Руслан</h2>
                        <a href="#">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/settings.svg" alt="">
                        </a>
                    </div>
                    <span>С 17.01.2025</span>
                    <p>Веб дизайнер со стажем 5 лет в создании и верстке сайтов. Делюсь своим опытом и интересными историями)</p>
                </div>
                <div class="author-information__tabs">
                    <p class="author-information__tab active">Посты</p>
                    <div class="author-information__write">
                        <a href="#">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/write-post.svg" alt="">
                            Написать
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
custom_footer();
?>