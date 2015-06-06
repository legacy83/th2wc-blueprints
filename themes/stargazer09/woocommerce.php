<?php get_header(); // Loads the header.php template. ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php if ( is_shop() || is_product_taxonomy() ) : ?>

            <div <?php hybrid_attr( 'loop-meta' ); ?>>

                <h1 <?php hybrid_attr( 'loop-title' ); ?>><?php woocommerce_page_title(); ?></h1>

                <?php
                ob_start();
                woocommerce_product_archive_description();
                woocommerce_taxonomy_archive_description();
                $loop_description = trim( strip_tags( ob_get_clean() ) );
                ?>

                <?php if ( $loop_description ) : ?>
                    <div <?php hybrid_attr( 'loop-description' ); ?>>
                        <?php echo wpautop( $loop_description ); ?>
                    </div>
                <?php endif; ?>

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

        <?php locate_template( array( 'misc/loop-nav.php' ), TRUE ); ?>

    </main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>