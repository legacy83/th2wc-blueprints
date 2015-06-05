<?php get_header(); // Loads the header.php template. ?>

    <div id="content">

        <div class="hfeed">

            <div class="hfeed-inner">

                <?php woocommerce_content(); ?>

            </div>

        </div>
        <!-- .hfeed -->

        <?php get_template_part( 'loop-nav' ); ?>

    </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>