<?php get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // my-life_before_content ?>

    <div id="content">

        <?php do_atomic( 'open_content' ); // my-life_open_content ?>

        <div class="hfeed">

            <?php woocommerce_content(); ?>

        </div>
        <!-- .hfeed -->

        <?php do_atomic( 'close_content' ); // my-life_close_content ?>

    </div><!-- #content -->

<?php do_atomic( 'after_content' ); // my-life_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>