<?php
/**
 * Main template file
 *
 * @package Careme
 */

get_header();

get_template_part( 'templates/hero' );

get_template_part( 'templates/stats' );

get_template_part( 'templates/services' );

get_template_part( 'templates/before-after' );

get_template_part( 'templates/doctors' );

get_template_part( 'templates/appointment' );

get_template_part( 'templates/testimonials' );
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
