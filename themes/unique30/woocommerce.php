<?php get_header(); // Loads the header.php template. ?>

    <div id="content" class="hfeed">

        <?php woocommerce_content(); ?>

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>