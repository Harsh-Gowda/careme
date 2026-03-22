<?php
/**
 * Header Template: Style 3 (Pearl Minimal)
 *
 * @package Careme
 */

$phone = get_theme_mod( 'careme_phone', '+1 234 567 890' );
$cta_text = get_theme_mod( 'careme_header_cta_text', 'Book Appointment' );
?>

<header class="c-header c-header--v3 js-sticky-header">
    <div class="container">
        <div class="c-header__inner d-flex align-items-center justify-content-between py-md">
            <!-- Left: Contact/WhatsApp Info -->
            <div class="c-header__left d-none d-lg-flex align-items-center">
                <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $phone ) ); ?>" class="c-header__icon-link me-lg">
                    <?php careme_icon( 'whatsapp', array( 'class' => 'u-icon--sm' ) ); ?>
                </a>
                <div class="c-header__contact-info small u-uppercase text-muted">
                    <span class="d-block"><?php esc_html_e( 'Call Us:', 'careme' ); ?></span>
                    <a href="tel:<?php echo esc_attr( $phone ); ?>" class="text-dark font-weight-bold"><?php echo esc_html( $phone ); ?></a>
                </div>
            </div>

            <!-- Center: Logo -->
            <div class="c-header__center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-logo">
                    <span class="c-logo__text h4 mb-0 u-uppercase font-weight-bold" style="letter-spacing: 0.2em;">Care<span class="text-primary">Me</span></span>
                </a>
            </div>

            <!-- Right: Navigation & CTA -->
            <div class="c-header__right d-flex align-items-center">
                <nav class="c-header__nav d-none d-xl-block me-xl">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu-v3',
                        'container'      => false,
                        'menu_class'     => 'c-nav-list d-flex list-unstyled mb-0',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>
                
                <a href="#appointment" class="btn btn--primary btn--sm u-uppercase px-lg d-none d-sm-inline-block">
                    <?php echo esc_html( $cta_text ); ?>
                </a>

                <button class="c-header__mobile-toggle js-nav-toggle btn d-xl-none ms-md" aria-label="Toggle Menu">

                    <span class="c-header__mobile-toggle-icon"></span>
                </button>
            </div>
        </div>
    </div>
</header>
