<?php
/**
 * The template for displaying services archive pages
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="c-page-header py-xl bg-light">
        <div class="container">
            <div class="c-page-header__content text-center">
                <h1 class="c-page-header__title"><?php esc_html_e( 'Our Dental Services', 'careme' ); ?></h1>
                <nav class="c-breadcrumbs mt-md">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'careme' ); ?></a>
                    <span class="c-breadcrumbs__separator mx-sm">/</span>
                    <span class="c-breadcrumbs__current"><?php esc_html_e( 'Services', 'careme' ); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <section class="c-services-archive py-xl">
        <div class="container">
            <div class="c-services-grid">
                <?php
                // Mocking service data for now
                $services = array(
                    array(
                        'title' => __( 'General Dentistry', 'careme' ),
                        'icon'  => 'shield',
                        'desc'  => __( 'Comprehensive oral exams, cleanings, and preventative care for all ages.', 'careme' ),
                    ),
                    array(
                        'title' => __( 'Cosmetic Dentistry', 'careme' ),
                        'icon'  => 'heart',
                        'desc'  => __( 'Transform your smile with whitening, veneers, and aesthetic bonding.', 'careme' ),
                    ),
                    array(
                        'title' => __( 'Dental Implants', 'careme' ),
                        'icon'  => 'star',
                        'desc'  => __( 'Permanent and natural-looking solutions for missing teeth.', 'careme' ),
                    ),
                    array(
                        'title' => __( 'Orthodontics', 'careme' ),
                        'icon'  => 'check',
                        'desc'  => __( 'Clear aligners and traditional braces for a perfectly aligned smile.', 'careme' ),
                    ),
                    array(
                        'title' => __( 'Oral Surgery', 'careme' ),
                        'icon'  => 'award',
                        'desc'  => __( 'Expert wisdom tooth extraction and corrective jaw surgery.', 'careme' ),
                    ),
                    array(
                        'title' => __( 'Emergency Care', 'careme' ),
                        'icon'  => 'phone',
                        'desc'  => __( '24/7 urgent dental care for pain relief and tooth repairs.', 'careme' ),
                    ),
                );

                foreach ( $services as $service ) : ?>
                    <div class="c-service-card c-service-card--archive">
                        <div class="c-service-card__icon">
                            <?php echo careme_get_icon( $service['icon'] ); ?>
                        </div>
                        <h3 class="c-service-card__title"><?php echo esc_html( $service['title'] ); ?></h3>
                        <p class="c-service-card__text"><?php echo esc_html( $service['desc'] ); ?></p>
                        <a href="#" class="btn btn--outline btn--sm mt-md"><?php esc_html_e( 'Service Details', 'careme' ); ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'templates/appointment' ); ?>
</main>

<?php
get_footer();
