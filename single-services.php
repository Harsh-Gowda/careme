<?php
/**
 * The template for displaying single service details
 *
 * @package Careme
 */

get_header();

$service_title = __( 'General Dentistry', 'careme' );
$hero_image = get_template_directory_uri() . '/assets/images/service_detail.jpg';
?>

<main id="primary" class="site-main">
    <section class="c-service-hero py-xl text-white" style="background-image: linear-gradient(rgba(26, 36, 47, 0.8), rgba(26, 36, 47, 0.8)), url('<?php echo esc_url( $hero_image ); ?>'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="c-service-hero__content text-center py-lg">
                <h1 class="h1"><?php echo esc_html( $service_title ); ?></h1>
                <p class="lead max-600 mx-auto"><?php esc_html_e( 'Maintain optimal oral health with our comprehensive general dentistry services.', 'careme' ); ?></p>
            </div>
        </div>
    </section>

    <div class="c-service-body py-xl">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="c-service-content pe-lg">
                        <h2><?php esc_html_e( 'What is General Dentistry?', 'careme' ); ?></h2>
                        <p><?php esc_html_e( 'General dentistry covers a wide range of procedures and services aimed at maintaining the health of your teeth and gums. Our clinic focuses on preventative care to help you avoid serious dental issues before they start.', 'careme' ); ?></p>
                        
                        <h3 class="mt-xl"><?php esc_html_e( 'Our Procedures Include:', 'careme' ); ?></h3>
                        <div class="c-procedure-list mt-md">
                            <div class="c-procedure-item p-md bg-light mb-sm rounded">
                                <strong>🦷 <?php esc_html_e( 'Regular Checkups & Cleanings', 'careme' ); ?></strong>
                                <p class="mb-0 small text-muted"><?php esc_html_e( 'Professional removal of plaque and tartar followed by a complete oral examination.', 'careme' ); ?></p>
                            </div>
                            <div class="c-procedure-item p-md bg-light mb-sm rounded">
                                <strong>🛡️ <?php esc_html_e( 'Dental Fillings', 'careme' ); ?></strong>
                                <p class="mb-0 small text-muted"><?php esc_html_e( 'Composite, tooth-colored fillings to repair cavities and restore tooth function.', 'careme' ); ?></p>
                            </div>
                            <div class="c-procedure-item p-md bg-light mb-sm rounded">
                                <strong>🔍 <?php esc_html_e( 'Digital X-Rays', 'careme' ); ?></strong>
                                <p class="mb-0 small text-muted"><?php esc_html_e( 'High-resolution imaging to detect underlying issues with minimal radiation.', 'careme' ); ?></p>
                            </div>
                        </div>

                        <div class="c-faq mt-xl">
                            <h2><?php esc_html_e( 'Frequently Asked Questions', 'careme' ); ?></h2>
                            <div class="c-faq__item mt-md">
                                <h4 class="h6 mb-sm"><?php esc_html_e( 'How often should I visit the dentist?', 'careme' ); ?></h4>
                                <p><?php esc_html_e( 'We recommend a professional cleaning and checkup every six months to maintain optimal health.', 'careme' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-xl mt-lg-0">
                    <aside class="c-service-sidebar p-lg bg-light rounded sticky-top" style="top: 100px;">
                        <h3 class="h5 mb-md"><?php esc_html_e( 'Other Services', 'careme' ); ?></h3>
                        <ul class="c-sidebar-nav list-unstyled mb-xl">
                            <li><a href="#" class="active"><?php esc_html_e( 'General Dentistry', 'careme' ); ?></a></li>
                            <li><a href="#"><?php esc_html_e( 'Cosmetic Dentistry', 'careme' ); ?></a></li>
                            <li><a href="#"><?php esc_html_e( 'Dental Implants', 'careme' ); ?></a></li>
                            <li><a href="#"><?php esc_html_e( 'Orthodontics', 'careme' ); ?></a></li>
                        </ul>

                        <div class="c-cta-box p-lg bg-primary text-white rounded text-center">
                            <h4 class="h5"><?php esc_html_e( 'Need Expert Advice?', 'careme' ); ?></h4>
                            <p class="small mb-md"><?php esc_html_e( 'Schedule a consultation with our lead practitioner today.', 'careme' ); ?></p>
                            <a href="#appointment" class="btn btn--white btn--sm w-100"><?php esc_html_e( 'Book Now', 'careme' ); ?></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
