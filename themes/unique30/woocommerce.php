<?php get_header(); // Loads the header.php template. ?>

    <div id="content" class="hfeed">

        <?php if ( is_shop() || is_product_taxonomy() ) : ?>

            <div class="loop-meta">

                <h1 class="loop-title"><?php woocommerce_page_title(); ?></h1>

                <div class="loop-description">
                    <?php
                    ob_start();
                    woocommerce_product_archive_description();
                    woocommerce_taxonomy_archive_description();
                    echo wpautop( trim( strip_tags( ob_get_clean() ) ) );
                    ?>
                </div>

            </div>
            <!-- .loop-meta -->

        <?php endif; ?>

        <?php
        add_filter( 'woocommerce_show_page_title', '__return_false' );
        remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
        remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
        remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
        woocommerce_content();
        ?>

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>