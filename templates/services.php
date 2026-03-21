<?php
/**
 * Services Section Template
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

<section id="services" class="c-services py-xl">
    <div class="container">
        <div class="c-services__header text-center mb-xl">
            <h2 class="c-services__title section-title"><?php esc_html_e( 'Our Dental Services', 'careme' ); ?></h2>
            <p class="c-services__subtitle section-subtitle"><?php esc_html_e( 'We provide a wide range of oral healthcare services to keep your smile healthy and bright.', 'careme' ); ?></p>
        </div>

        <div class="c-services__grid">
            <?php foreach ( $services as $service ) : ?>
                <div class="c-card c-services__card">
                    <div class="c-card__icon c-services__icon">
                        <?php echo careme_get_icon( $service['icon'] ); ?>
                    </div>
                    <h3 class="c-card__title"><?php echo esc_html( $service['title'] ); ?></h3>
                    <p class="c-card__text"><?php echo esc_html( $service['desc'] ); ?></p>
                    <a href="#" class="c-card__link"><?php esc_html_e( 'Learn More', 'careme' ); ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
