<?php
/**
 * Doctors/Expert Profiles Section
 *
 * @package Careme
 */

$doctors = array(
    array(
        'name'      => __( 'Dr. Sarah Johnson', 'careme' ),
        'specialty' => __( 'Chief Orthodontist', 'careme' ),
        'image'     => 'doctor-1.jpg',
        'socials'   => array( 'facebook', 'twitter', 'linkedin' ),
    ),
    array(
        'name'      => __( 'Dr. Michael Chen', 'careme' ),
        'specialty' => __( 'Cosmetic Dentist', 'careme' ),
        'image'     => 'doctor-2.jpg',
        'socials'   => array( 'facebook', 'instagram', 'linkedin' ),
    ),
    array(
        'name'      => __( 'Dr. Emily Williams', 'careme' ),
        'specialty' => __( 'Pediatric Dentist', 'careme' ),
        'image'     => 'doctor-3.jpg',
        'socials'   => array( 'twitter', 'instagram' ),
    ),
);
?>

<section id="doctors" class="c-doctors py-xl">
    <div class="container">
        <div class="c-doctors__header text-center mb-xl">
            <h2 class="c-doctors__title section-title"><?php esc_html_e( 'Meet Our Experts', 'careme' ); ?></h2>
            <p class="c-doctors__subtitle section-subtitle"><?php esc_html_e( 'Our team of experienced professionals is dedicated to providing the best dental care.', 'careme' ); ?></p>
        </div>

        <div class="c-doctors__grid">
            <?php foreach ( $doctors as $doctor ) : ?>
                <div class="c-doctor-card">
                    <div class="c-doctor-card__image">
                        <img src="<?php echo esc_url( $doctor['image'] ); ?>" alt="<?php echo esc_attr( $doctor['name'] ); ?>" loading="lazy" class="c-doctor-card__image">
                        <div class="c-doctor-card__socials">
                            <?php foreach ( $doctor['socials'] as $network => $url ) : ?>
                                <a href="<?php echo esc_url( $url ); ?>" class="c-doctor-card__social-link" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                                    <?php echo careme_get_icon( $network ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="c-doctor-card__content text-center">
                        <h3 class="c-doctor-card__name"><?php echo esc_html( $doctor['name'] ); ?></h3>
                        <p class="c-doctor-card__specialty text-primary"><?php echo esc_html( $doctor['specialty'] ); ?></p>
                        <a href="#" class="btn btn--outline btn--sm mt-md"><?php esc_html_e( 'View Profile', 'careme' ); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
