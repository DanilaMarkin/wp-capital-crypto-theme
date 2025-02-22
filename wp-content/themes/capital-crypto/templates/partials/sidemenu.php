<aside class="sidemenu">
    <nav class="sidemenu__nav"
        role="navigation">
        <button class="sidemenu__promo-btn">
            <img src="<?= get_template_directory_uri(); ?>/assets/icons/star.svg" alt="">
            Аирдроп от ByBit
            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-right.svg" alt="" class="sidemenu__promo-arrow-next">
        </button>
        <ul class="sidemenu__list sidemenu__categories">
            <?php
            wp_nav_menu([
                "theme_location" => 'sidemenu',
                "container" => false,
                "items_wrap" => '%3$s',
                "walker" => new WP_Custom_SideWalker()
            ]);
            ?>
        </ul>
    </nav>
</aside>