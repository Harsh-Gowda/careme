<?php
/**
 * Services Section Template (Pearl Edition)
 *
 * @package Careme
 */


$services = array(
    array(
        'title' => __( 'General Dentistry', 'careme' ),
        'desc'  => __( 'Comprehensive oral exams, cleanings, and preventative care for all ages.', 'careme' ),
        'icon'  => 'tooth',
    ),
    array(
        'title' => __( 'Orthodontics', 'careme' ),
        'desc'  => __( 'Braces and clear aligners to help you achieve a perfectly straight smile.', 'careme' ),
        'icon'  => 'braces',
    ),
    array(
        'title' => __( 'Cosmetic Surgery', 'careme' ),
        'desc'  => __( 'Transform your smile with veneers, whitening, and aesthetic treatments.', 'careme' ),
        'icon'  => 'sparkles',
    ),
    array(
        'title' => __( 'Oral Surgery', 'careme' ),
        'desc'  => __( 'Expert surgical care for extractions, implants, and complex dental needs.', 'careme' ),
        'icon'  => 'first-aid',
    ),
);
?>

<section id="services" class="c-services py-xl bg-light">
    <div class="container">
        <div class="c-services__header text-center mb-xl">
            <span class="u-uppercase text-primary small font-weight-bold mb-md d-block" style="letter-spacing: 0.2em;"><?php esc_html_e( 'Clinical Excellence', 'careme' ); ?></span>
            <h2 class="c-services__title section-title display-5 font-weight-bold mb-lg" style="font-family: 'Cormorant Garamond', serif;"><?php esc_html_e( 'Bespoke Treatments', 'careme' ); ?></h2>
            <p class="c-services__subtitle section-subtitle text-muted mx-auto" style="max-width: 600px;"><?php esc_html_e( 'We provide a wide range of premium oral healthcare services designed to enhance your smile and confidence.', 'careme' ); ?></p>
        </div>

        <div class="c-services__grid row g-lg">
            <?php foreach ( $services as $service ) : ?>
                <div class="col-md-6 col-lg-3">
                    <div class="c-card c-services__card h-100 p-lg text-center bg-white shadow-sm transition hover-up border-top border-primary border-4" style="box-shadow: 0 1rem 3rem rgba(214, 201, 173, 0.1) !important;">
                        <div class="c-card__icon c-services__icon text-primary mb-md d-inline-block p-sm rounded-circle" style="background-color: rgba(214, 201, 173, 0.1);">
                            <?php echo careme_get_icon( $service['icon'] ); ?>
                        </div>
                        <h3 class="c-card__title h5 u-uppercase mb-sm" style="letter-spacing: 0.05em;"><?php echo esc_html( $service['title'] ); ?></h3>
                        <p class="c-card__text text-muted small mb-lg"><?php echo esc_html( $service['desc'] ); ?></p>
                        <a href="#" class="c-card__link text-dark text-decoration-none u-uppercase small font-weight-bold d-inline-flex align-items-center transition" style="letter-spacing: 0.1em;">
                            <?php esc_html_e( 'Discover More', 'careme' ); ?>
                            <span class="ms-sm">→</span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

