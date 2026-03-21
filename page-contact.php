<?php
/**
 * Template Name: Contact Us
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="c-page-header py-xl bg-light">
        <div class="container">
            <div class="c-page-header__content text-center">
                <h1 class="c-page-header__title"><?php esc_html_e( 'Contact Our Experts', 'careme' ); ?></h1>
                <nav class="c-breadcrumbs mt-md">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'careme' ); ?></a>
                    <span class="c-breadcrumbs__separator mx-sm">/</span>
                    <span class="c-breadcrumbs__current"><?php esc_html_e( 'Contact Us', 'careme' ); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <section class="c-contact py-xl">
        <div class="container">
            <div class="row">
                <!-- Contact Info Boxes -->
                <div class="col-lg-4 mb-xl mb-lg-0">
                    <div class="c-contact-sidebar pe-lg">
                        <h2 class="h3 mb-lg"><?php esc_html_e( 'Get in Touch', 'careme' ); ?></h2>
                        
                        <div class="c-contact-item mb-xl">
                            <div class="c-contact-item__icon h2 text-primary mb-sm">📍</div>
                            <h3 class="h5"><?php esc_html_e( 'Our Location', 'careme' ); ?></h3>
                            <p class="text-muted"><?php echo esc_html( get_theme_mod( 'careme_address', '123 Healthcare Blvd, Medical District, NY 10001' ) ); ?></p>
                        </div>

                        <div class="c-contact-item mb-xl">
                            <div class="c-contact-item__icon h2 text-primary mb-sm">📞</div>
                            <h3 class="h5"><?php esc_html_e( 'Phone Number', 'careme' ); ?></h3>
                            <a href="tel:<?php echo esc_attr( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>" class="h6 text-decoration-none">
                                <?php echo esc_html( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>
                            </a>
                        </div>

                        <div class="c-contact-item mb-xl">
                            <div class="c-contact-item__icon h2 text-primary mb-sm">🕒</div>
                            <h3 class="h5"><?php esc_html_e( 'Office Hours', 'careme' ); ?></h3>
                            <ul class="list-unstyled text-muted small">
                                <li class="d-flex justify-content-between mb-1"><span>Mon - Fri:</span> <span>9:00 AM - 6:00 PM</span></li>
                                <li class="d-flex justify-content-between mb-1"><span>Saturday:</span> <span>10:00 AM - 4:00 PM</span></li>
                                <li class="d-flex justify-content-between"><span>Sunday:</span> <span class="text-danger">Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="c-contact-form-wrapper p-xl bg-white rounded shadow-sm border">
                        <h2 class="h3 mb-md"><?php esc_html_e( 'Send Us a Message', 'careme' ); ?></h2>
                        <p class="mb-xl text-muted"><?php esc_html_e( 'Have a question about our treatments? Drop us a line and we will get back to you within 24 hours.', 'careme' ); ?></p>
                        
                        <form id="contact-form" class="c-form row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?php esc_html_e( 'Full Name', 'careme' ); ?></label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label"><?php esc_html_e( 'Email Address', 'careme' ); ?></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label"><?php esc_html_e( 'Subject', 'careme' ); ?></label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label"><?php esc_html_e( 'Your Message', 'careme' ); ?></label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <div class="col-12 mt-xl text-end">
                                <button type="submit" class="btn btn--primary px-xl"><?php esc_html_e( 'Send Message', 'careme' ); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <section class="c-map-section mt-xl">
        <div class="c-map-placeholder" style="height: 450px; background: #eee; display: flex; align-items: center; justify-content: center; position: relative;">
            <div class="text-center">
                <div class="h1 text-muted">📍</div>
                <h3 class="text-muted"><?php esc_html_e( 'Interactive Map Placeholder', 'careme' ); ?></h3>
                <p class="small text-muted"><?php esc_html_e( 'Integration with Google Maps API via WP Customizer ready.', 'careme' ); ?></p>
            </div>
            <!-- In a real scenario, we'd enqueue the Google Maps script here -->
        </div>
    </section>
</main>

<?php
get_footer();
