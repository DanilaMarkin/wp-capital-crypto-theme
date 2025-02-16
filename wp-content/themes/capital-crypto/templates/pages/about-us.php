<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <?php
        yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>');
        ?>

        <section class="general">
            <h1 class="content__title"><?php the_title(); ?></h1>
            <div class="general__wrapper">
                <?php
                the_content();
                ?>
            </div>
        </section>
    </main>
</div>

<?php
custom_footer();
?>