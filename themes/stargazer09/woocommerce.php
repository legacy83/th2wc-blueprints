
<?php get_header(); // Loads the header.php template. ?>

<main <?php hybrid_attr( 'content' ); ?>>

    <?php woocommerce_content(); ?>

</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>