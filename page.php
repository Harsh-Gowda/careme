<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Careme
 */

get_header();
?>

	<main id="primary" class="site-main py-xl">
        <div class="container mt-md">
            <header class="page-header mb-xl">
                <?php the_title( '<h1 class="page-title h2">', '</h1>' ); ?>
            </header>

            <div class="page-content">
                <?php
                while ( have_posts() ) :
                    the_post();

                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'careme' ),
                        'after'  => '</div>',
                    ) );

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_footer();
