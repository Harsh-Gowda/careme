<?php
/**
 * Testimonials Section Template
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

<section id="testimonials" class="c-testimonials py-xl">
    <div class="container">
        <div class="c-testimonials__header text-center mb-xl">
            <h2 class="section-title"><?php esc_html_e( 'What Our Patients Say', 'careme' ); ?></h2>
            <p class="section-subtitle"><?php esc_html_e( 'Read real stories from patients who have experienced our world-class care.', 'careme' ); ?></p>
        </div>

        <div class="c-testimonials__slider js-testimonial-slider" data-autoplay="true">
            <div class="c-testimonials__track js-slider-track">
                <?php foreach ( $testimonials as $testimonial ) : ?>
                    <div class="c-testimonial-card js-slider-item">
                        <div class="c-testimonial-card__rating">
                            <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                                <span class="c-testimonial-card__star <?php echo $i < $testimonial['rating'] ? 'is-active' : ''; ?>">★</span>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="c-testimonial-card__quote">
                            <p><?php echo esc_html( $testimonial['quote'] ); ?></p>
                        </blockquote>
                        <div class="c-testimonial-card__author">
                            <h4 class="c-testimonial-card__name"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                            <p class="c-testimonial-card__role"><?php echo esc_html( $testimonial['role'] ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="c-testimonials__nav">
                <button class="c-testimonials__arrow c-testimonials__arrow--prev js-slider-prev" aria-label="<?php esc_attr_e( 'Previous testimonial', 'careme' ); ?>">
                    <?php echo careme_get_icon( 'arrow-left' ); ?>
                </button>
                <div class="c-testimonials__dots js-slider-dots"></div>
                <button class="c-testimonials__arrow c-testimonials__arrow--next js-slider-next" aria-label="<?php esc_attr_e( 'Next testimonial', 'careme' ); ?>">
                    <?php echo careme_get_icon( 'arrow-right' ); ?>
                </button>
            </div>
        </div>
    </div>
</section>
