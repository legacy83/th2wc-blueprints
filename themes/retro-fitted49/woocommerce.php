<?php get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // retro-fitted_before_content ?>

    <div id="content">

        <?php do_atomic( 'open_content' ); // retro-fitted_open_content ?>

        <div class="hfeed">

            <div class="hfeed-inner">

                <?php woocommerce_content(); ?>

            </div>

        </div>
        <!-- .hfeed -->

        <?php do_atomic( 'close_content' ); // retro-fitted_close_content ?>

    </div><!-- #content -->

<?php do_atomic( 'after_content' ); // retro-fitted_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>