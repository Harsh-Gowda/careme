<?php
/**
 * Testimonials Section Template (Pearl Edition)
 *
 * @package Careme
 */


$testimonials = array(
    array(
        'quote'   => __( 'Careme provided the most painless dental experience I’ve ever had. The staff is incredibly friendly and professional.', 'careme' ),
        'name'    => 'John Doe',
        'role'    => 'Patient',
        'rating'  => 5,
    ),
    array(
        'quote'   => __( 'I absolutely love my new smile! Dr. Sarah and her team did an amazing job with my orthodontic treatment.', 'careme' ),
        'name'    => 'Jane Smith',
        'role'    => 'Patient',
        'rating'  => 5,
    ),
    array(
        'quote'   => __( 'Highly recommend for anyone looking for quality dental care. The clinic is modern, clean, and uses the latest technology.', 'careme' ),
        'name'    => 'Robert Brown',
        'role'    => 'Patient',
        'rating'  => 4,
    ),
);
?>

<section id="testimonials" class="c-testimonials py-xl position-relative bg-light" style="background-color: #faf9f7 !important;">
    <div class="container position-relative z-index-1">
        <div class="c-testimonials__header text-center mb-xl">
            <span class="u-uppercase text-primary small font-weight-bold mb-md d-block" style="letter-spacing: 0.2em;"><?php esc_html_e( 'Testimonials', 'careme' ); ?></span>
            <h2 class="c-testimonials__title section-title display-5 font-weight-bold mb-lg" style="font-family: 'Cormorant Garamond', serif;"><?php esc_html_e( 'Patient Stories', 'careme' ); ?></h2>
            <p class="c-testimonials__subtitle section-subtitle text-muted mx-auto" style="max-width: 600px;"><?php esc_html_e( 'Read real stories from patients who have experienced our world-class cosmetic and clinical care.', 'careme' ); ?></p>
        </div>

        <div class="c-testimonials__slider js-testimonial-slider" data-autoplay="true">
            <div class="c-testimonials__track js-slider-track row g-lg justify-content-center">
                <?php foreach ( $testimonials as $testimonial ) : ?>
                    <div class="col-lg-4 c-testimonial-card js-slider-item">
                        <div class="bg-white p-xl h-100 position-relative shadow-sm transition hover-up border-top border-primary border-4" style="box-shadow: 0 1rem 3rem rgba(214, 201, 173, 0.1) !important;">
                            <!-- Decorative Quote Mark -->
                            <div class="position-absolute text-primary" style="top: -15px; right: 30px; font-size: 5rem; line-height: 1; font-family: 'Cormorant Garamond', serif; opacity: 0.2;">"</div>
                            
                            <div class="c-testimonial-card__rating text-primary mb-md mt-sm d-flex gap-1" style="font-size: 0.85rem;">
                                <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                                    <span class="c-testimonial-card__star <?php echo $i < $testimonial['rating'] ? 'is-active text-primary' : 'text-muted opacity-25'; ?>">★</span>
                                <?php endfor; ?>
                            </div>
                            
                            <blockquote class="c-testimonial-card__quote mb-lg position-relative z-index-1">
                                <p class="fst-italic text-dark mb-0" style="font-size: 1.1rem; line-height: 1.8; font-family: 'Cormorant Garamond', serif;">"<?php echo esc_html( $testimonial['quote'] ); ?>"</p>
                            </blockquote>
                            
                            <div class="c-testimonial-card__author border-top border-secondary pt-md mt-auto">
                                <h4 class="c-testimonial-card__name h6 u-uppercase font-weight-bold mb-xs text-dark" style="letter-spacing: 0.1em;"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                <p class="c-testimonial-card__role text-primary u-uppercase small mb-0" style="letter-spacing: 0.1em; font-size: 0.7rem;"><?php echo esc_html( $testimonial['role'] ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="c-testimonials__nav d-flex justify-content-center align-items-center gap-4 mt-xl pt-md">
                <button class="c-testimonials__arrow c-testimonials__arrow--prev js-slider-prev btn btn--outline-dark btn--icon rounded-circle transition hover-up" aria-label="<?php esc_attr_e( 'Previous testimonial', 'careme' ); ?>">
                    <?php echo careme_get_icon( 'arrow-left' ); ?>
                </button>
                <div class="c-testimonials__dots js-slider-dots"></div>
                <button class="c-testimonials__arrow c-testimonials__arrow--next js-slider-next btn btn--outline-dark btn--icon rounded-circle transition hover-up" aria-label="<?php esc_attr_e( 'Next testimonial', 'careme' ); ?>">
                    <?php echo careme_get_icon( 'arrow-right' ); ?>
                </button>
            </div>
        </div>
    </div>
</section>

