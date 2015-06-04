<?php get_header(); // Loads the header.php template. ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <div class="content-inner">

            <?php woocommerce_content(); ?>

        </div>

    </main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>