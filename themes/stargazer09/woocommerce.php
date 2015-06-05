<?php get_header(); // Loads the header.php template. ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php woocommerce_content(); ?>

        <?php locate_template( array( 'misc/loop-nav.php' ), TRUE ); ?>

    </main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>