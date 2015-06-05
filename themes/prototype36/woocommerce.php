<?php get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // prototype_before_content ?>

    <div id="content">

        <?php do_atomic( 'open_content' ); // prototype_open_content ?>

        <div class="hfeed">

            <?php woocommerce_content(); ?>

        </div>
        <!-- .hfeed -->

        <?php do_atomic( 'close_content' ); // prototype_close_content ?>

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php do_atomic( 'after_content' ); // prototype_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>