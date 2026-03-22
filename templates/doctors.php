<?php
/**
 * Doctors/Expert Profiles Section (Pearl Edition)
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
            <span class="u-uppercase text-primary small font-weight-bold mb-md d-block" style="letter-spacing: 0.2em;"><?php esc_html_e( 'Our Experts', 'careme' ); ?></span>
            <h2 class="c-doctors__title section-title display-5 font-weight-bold mb-lg" style="font-family: 'Cormorant Garamond', serif;"><?php esc_html_e( 'Meet The Team', 'careme' ); ?></h2>
            <p class="c-doctors__subtitle section-subtitle text-muted mx-auto" style="max-width: 600px;"><?php esc_html_e( 'Our internationally trained specialists are dedicated to providing the highest standard of cosmetic and clinical dentistry.', 'careme' ); ?></p>
        </div>

        <div class="c-doctors__grid row justify-content-center g-xl">
            <?php foreach ( $doctors as $doctor ) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="c-doctor-card text-center group">
                        <div class="c-doctor-card__image-wrapper overflow-hidden mb-lg position-relative" style="aspect-ratio: 3/4; background-color: #f8f9fa;">
                            <img src="<?php echo esc_url( $doctor['image'] ); ?>" alt="<?php echo esc_attr( $doctor['name'] ); ?>" loading="lazy" class="c-doctor-card__image w-100 h-100 object-fit-cover u-grayscale transition hover-scale">
                            
                            <div class="c-doctor-card__socials position-absolute bottom-0 start-50 translate-middle-x mb-md opacity-0 group-hover-opacity-100 transition d-flex gap-2">
                                <?php foreach ( $doctor['socials'] as $network => $url ) : ?>
                                    <a href="<?php echo esc_url( $url ); ?>" class="btn btn--icon btn--sm btn--primary rounded-circle" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                                        <?php echo careme_get_icon( $network ); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="c-doctor-card__content">
                            <h3 class="c-doctor-card__name h4 font-weight-bold mb-xs" style="font-family: 'Cormorant Garamond', serif;"><?php echo esc_html( $doctor['name'] ); ?></h3>
                            <p class="c-doctor-card__specialty text-primary u-uppercase small font-weight-bold" style="letter-spacing: 0.1em;"><?php echo esc_html( $doctor['specialty'] ); ?></p>
                            <a href="#" class="btn btn--outline-dark btn--sm mt-sm u-uppercase" style="letter-spacing: 0.1em;"><?php esc_html_e( 'View Profile', 'careme' ); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.group:hover .group-hover-opacity-100 { opacity: 1 !important; }
.hover-scale { transition: transform 0.5s ease; }
.group:hover .hover-scale { transform: scale(1.05); }
.object-fit-cover { object-fit: cover; }
.opacity-0 { opacity: 0; }
</style>

