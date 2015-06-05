<?php get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // trending_before_content ?>

    <div id="content">

        <?php do_atomic( 'open_content' ); // trending_open_content ?>

        <div class="hfeed">

            <div class="hfeed-inner">

                <?php woocommerce_content(); ?>

            </div>

        </div>
        <!-- .hfeed -->

        <?php do_atomic( 'close_content' ); // trending_close_content ?>

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php do_atomic( 'after_content' ); // trending_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>