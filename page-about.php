<?php
/**
 * Template Name: About Us
 *
 * @package Careme
 */

get_header();

$about_image = get_template_directory_uri() . '/assets/images/about_hero.jpg';
?>

<main id="primary" class="site-main">
    <!-- About Hero -->
    <section class="c-page-header py-xl bg-light">
        <div class="container">
            <div class="c-page-header__content text-center">
                <h1 class="c-page-header__title"><?php esc_html_e( 'About Our Clinic', 'careme' ); ?></h1>
                <nav class="c-breadcrumbs mt-md">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'careme' ); ?></a>
                    <span class="c-breadcrumbs__separator mx-sm">/</span>
                    <span class="c-breadcrumbs__current"><?php esc_html_e( 'About Us', 'careme' ); ?></span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="c-about-mission py-xl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-lg">
                    <div class="c-about-mission__image rounded shadow overflow-hidden">
                        <img src="<?php echo esc_url( $about_image ); ?>" alt="Modern Dental Clinic" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-about-mission__content ps-lg">
                        <h2 class="section-title text-start mb-md"><?php esc_html_e( 'Our Mission: Your Perfect Smile', 'careme' ); ?></h2>
                        <p class="mb-md">
                            <?php esc_html_e( 'Founded in 2010, Careme Medical has been at the forefront of dental innovation. We believe that everyone deserves a healthy, beautiful smile through personalized care and advanced technology.', 'careme' ); ?>
                        </p>
                        <p class="mb-lg">
                            <?php esc_html_e( 'From routine checkups to complex cosmetic transformations, our team of experts is dedicated to clinical excellence and patient comfort.', 'careme' ); ?>
                        </p>
                        <ul class="c-check-list list-unstyled">
                            <li><strong>✓</strong> <?php esc_html_e( 'Advanced 3D Dental Imaging', 'careme' ); ?></li>
                            <li><strong>✓</strong> <?php esc_html_e( 'Pain-Free Treatment Protocols', 'careme' ); ?></li>
                            <li><strong>✓</strong> <?php esc_html_e( 'Certified Cosmetic Specialists', 'careme' ); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clinic Values -->
    <section class="c-values py-xl bg-light">
        <div class="container">
            <div class="c-values__grid">
                <div class="c-value-card text-center p-lg bg-white rounded shadow-sm">
                    <div class="c-value-card__icon h1 mb-md">🤝</div>
                    <h3 class="h4"><?php esc_html_e( 'Patient-First', 'careme' ); ?></h3>
                    <p><?php esc_html_e( 'We listen to your concerns and tailor every treatment plan to your unique needs.', 'careme' ); ?></p>
                </div>
                <div class="c-value-card text-center p-lg bg-white rounded shadow-sm">
                    <div class="c-value-card__icon h1 mb-md">🔬</div>
                    <h3 class="h4"><?php esc_html_e( 'Innovation', 'careme' ); ?></h3>
                    <p><?php esc_html_e( 'Continuous investment in the latest dental technology for faster, better results.', 'careme' ); ?></p>
                </div>
                <div class="c-value-card text-center p-lg bg-white rounded shadow-sm">
                    <div class="c-value-card__icon h1 mb-md">🏆</div>
                    <h3 class="h4"><?php esc_html_e( 'Excellence', 'careme' ); ?></h3>
                    <p><?php esc_html_e( 'Maintaining the highest standards of sterilization and clinical precision.', 'careme' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'templates/testimonials' ); ?>
    
    <?php get_template_part( 'templates/appointment' ); ?>
</main>

<?php
get_footer();
