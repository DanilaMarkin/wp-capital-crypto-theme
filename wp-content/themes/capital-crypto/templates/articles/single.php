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
                        <!-- to do -->
                    </div>
                    <div class="information__header-date">
                        <!-- to do -->
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