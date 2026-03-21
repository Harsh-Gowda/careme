<?php
/**
 * Template Name: Full Width (Elementor Optimized)
 * Template Post Type: page, post
 *
 * @package Careme
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile; // End of the loop.
        ?>
	</main><!-- #main -->

<?php
get_footer();
