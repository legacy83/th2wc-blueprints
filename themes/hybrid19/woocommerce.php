<?php get_header(); // Loads the header.php template. ?>

    <div id="content" class="hfeed content">

        <?php do_atomic( 'before_content' ); // hybrid_before_content ?>

        <?php woocommerce_content(); ?>

        <?php do_atomic( 'after_content' ); // hybrid_after_content ?>

    </div><!-- .content .hfeed -->

<?php get_footer(); // Loads the footer.php template. ?>