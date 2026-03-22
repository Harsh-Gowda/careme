<?php
/**
 * Footer Template: Style 3 (Dark Pearl)
 *
 * @package Careme
 */

$address = get_theme_mod( 'careme_address', '123 Healthcare Blvd, Medical District, NY 10001' );
$phone = get_theme_mod( 'careme_phone', '+1 234 567 890' );
$email = get_theme_mod( 'careme_email', 'info@careme-dental.com' );
?>

<footer class="c-footer c-footer--v3 bg-dark text-white pt-xl pb-lg">
    <div class="container">
        <div class="row g-xl">
            <!-- Column 1: Brand & About -->
            <div class="col-lg-4 mb-xl mb-lg-0">
                <div class="c-footer__brand mb-lg">
                    <h2 class="h4 u-uppercase text-white mb-md" style="letter-spacing: 0.2em;">Care<span class="text-primary">Me</span></h2>
                    <p class="text-muted small" style="max-width: 300px;">
                        <?php esc_html_e( 'Providing world-class dental care with a focus on luxury, comfort, and state-of-the-art technology.', 'careme' ); ?>
                    </p>
                </div>
                <div class="c-footer__social d-flex">
                    <a href="#" class="btn btn--icon btn--sm btn--outline-light me-sm rounded-circle"><?php careme_icon( 'facebook' ); ?></a>
                    <a href="#" class="btn btn--icon btn--sm btn--outline-light me-sm rounded-circle"><?php careme_icon( 'instagram' ); ?></a>
                    <a href="#" class="btn btn--icon btn--sm btn--outline-light rounded-circle"><?php careme_icon( 'whatsapp' ); ?></a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-md-4 col-lg-2 mb-xl mb-md-0">
                <h3 class="h6 u-uppercase text-primary mb-lg" style="letter-spacing: 0.1em;"><?php esc_html_e( 'Quick links', 'careme' ); ?></h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-quick',
                    'container'      => false,
                    'menu_class'     => 'list-unstyled small text-muted',
                ) );
                ?>
            </div>

            <!-- Column 3: Services -->
            <div class="col-md-4 col-lg-2 mb-xl mb-md-0">
                <h3 class="h6 u-uppercase text-primary mb-lg" style="letter-spacing: 0.1em;"><?php esc_html_e( 'Services', 'careme' ); ?></h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-services',
                    'container'      => false,
                    'menu_class'     => 'list-unstyled small text-muted',
                ) );
                ?>
            </div>

            <!-- Column 4: Contact -->
            <div class="col-md-4 col-lg-4">
                <h3 class="h6 u-uppercase text-primary mb-lg" style="letter-spacing: 0.1em;"><?php esc_html_e( 'Location', 'careme' ); ?></h3>
                <ul class="list-unstyled small text-muted mb-lg">
                    <li class="mb-md d-flex align-items-start">
                        <?php careme_icon( 'map-pin', array( 'class' => 'me-md text-primary' ) ); ?>
                        <span><?php echo nl2br( esc_html( $address ) ); ?></span>
                    </li>
                    <li class="mb-md d-flex align-items-center">
                        <?php careme_icon( 'phone', array( 'class' => 'me-md text-primary' ) ); ?>
                        <a href="tel:<?php echo esc_attr( $phone ); ?>" class="text-muted text-decoration-none"><?php echo esc_html( $phone ); ?></a>
                    </li>
                    <li class="d-flex align-items-center">
                        <?php careme_icon( 'mail', array( 'class' => 'me-md text-primary' ) ); ?>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-muted text-decoration-none"><?php echo esc_html( $email ); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="c-footer__bottom mt-xl pt-lg border-top border-secondary text-center">
            <p class="small text-muted mb-0">
                &copy; <?php echo date( 'Y' ); ?> CareMe Pearl Edition. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
