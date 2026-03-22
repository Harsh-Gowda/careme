<?php
/**
 * The front page template file
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Hero Section
    get_template_part( 'template-parts/home/hero-pearl' );
    
    // Philosophy Section
    ?>
    <section id="about" class="c-philosophy py-xl">
        <div class="container text-center">
            <span class="section-subtitle"><?php esc_html_e( 'Our Philosophy', 'careme' ); ?></span>
            <h2 class="section-title mx-auto" style="max-width: 800px;"><?php esc_html_e( 'A Personal Approach to Remarkable Oral Health', 'careme' ); ?></h2>
            <div class="row justify-content-center mt-xl">
                <div class="col-lg-10">
                    <p class="lead text-muted" style="line-height: 1.8;">
                        <?php esc_html_e( 'At CareMe, we believe that dental care is more than just treatments. It is about building relationships, understanding your unique needs, and providing an environment where luxury meets medical excellence. Inspired by global standards, we bring a boutique experience to every smile we touch.', 'careme' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Services Section Placeholder
    ?>
    <section id="services" class="c-services-pearl py-xl bg-light">
        <div class="container">
            <div class="text-center mb-xl">
                <span class="section-subtitle"><?php esc_html_e( 'Expertise', 'careme' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Our Services', 'careme' ); ?></h2>
            </div>
            
            <div class="row g-lg">
                <?php
                $services = array(
                    'Cosmetic Dentistry' => 'Transform your smile with veneers, whitening, and bonding.',
                    'General Dentistry'   => 'Comprehensive care for the whole family, from checkups to fillings.',
                    'Orthodontics'       => 'Modern solutions for perfect alignment, including Invisalign.',
                    'Oral Surgery'       => 'Expert surgical care in a comfortable, safe environment.'
                );
                
                foreach ( $services as $title => $desc ) : ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="c-service-card-minimal h-100 p-xl bg-white shadow-sm hover-up transition">
                            <h3 class="h5 mb-md u-uppercase small font-weight-bold" style="letter-spacing: 0.1em;"><?php echo esc_html( $title ); ?></h3>
                            <p class="text-muted small mb-lg"><?php echo esc_html( $desc ); ?></p>
                            <a href="#" class="text-primary small u-uppercase font-weight-bold text-decoration-none" style="letter-spacing: 0.1em;"><?php esc_html_e( 'Learn More →', 'careme' ); ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php
    // Booking Form Anchor
    ?>
    <section id="appointment" class="py-xl">
        <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="section-subtitle"><?php esc_html_e( 'Reservations', 'careme' ); ?></span>
                    <h2 class="section-title mb-lg"><?php esc_html_e( 'Book Your Consultation', 'careme' ); ?></h2>
                    <p class="text-muted mb-xl"><?php esc_html_e( 'Start your journey to a healthy, confident smile today. Select a convenient time for your initial assessment.', 'careme' ); ?></p>
                    <a href="tel:<?php echo esc_attr( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>" class="btn btn--primary btn--lg px-xl py-md u-uppercase">
                        <?php esc_html_e( 'Call to Book Now', 'careme' ); ?>
                    </a>
                </div>
             </div>
        </div>
    </section>
</main>

<?php
get_footer();
