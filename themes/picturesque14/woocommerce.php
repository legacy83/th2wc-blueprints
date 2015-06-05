<?php get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // picturesque_before_content ?>

    <div id="content">

        <?php do_atomic( 'open_content' ); // picturesque_open_content ?>

        <div class="hfeed">

            <?php woocommerce_content(); ?>

        </div>
        <!-- .hfeed -->

        <?php do_atomic( 'close_content' ); // picturesque_close_content ?>

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php do_atomic( 'after_content' ); // picturesque_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>