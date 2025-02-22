<?php
custom_header();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <section class="general-404">
            <div class="general__404-wrapper">
                <?php
                $page_id = 182; // ID страницы 404
                $page = get_post($page_id);

                if ($page) {
                    echo apply_filters('the_content', $page->post_content);
                }
                ?>
            </div>
        </section>
    </main>
</div>

<?php
custom_footer();
?>