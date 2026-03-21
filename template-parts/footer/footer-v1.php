<?php
/**
 * Footer Style 1 (Standard)
 *
 * @package Careme
 */
?>
<footer id="colophon" class="c-footer py-xl">
    <div class="container">
        <div class="c-footer__grid">
            <div class="c-footer__column c-footer__column--brand">
                <div class="c-footer__logo mb-md">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-footer__site-title"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                </div>
                <p class="c-footer__description mb-lg">
                    <?php esc_html_e( 'Providing world-class dental care with a focus on patient comfort and advanced technology. Your smile is our priority.', 'careme' ); ?>
                </p>
                <div class="c-footer__socials">
                    <a href="#" class="c-footer__social-link"><?php echo careme_get_icon( 'facebook' ); ?></a>
                    <a href="#" class="c-footer__social-link"><?php echo careme_get_icon( 'twitter' ); ?></a>
                    <a href="#" class="c-footer__social-link"><?php echo careme_get_icon( 'instagram' ); ?></a>
                    <a href="#" class="c-footer__social-link"><?php echo careme_get_icon( 'linkedin' ); ?></a>
                </div>
            </div>

            <div class="c-footer__column">
                <h4 class="c-footer__title"><?php esc_html_e( 'Quick Links', 'careme' ); ?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-quick',
                    'container'      => false,
                    'menu_class'     => 'c-footer__menu list-unstyled',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
            </div>

            <div class="c-footer__column">
                <h4 class="c-footer__title"><?php esc_html_e( 'Dental Services', 'careme' ); ?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-services',
                    'container'      => false,
                    'menu_class'     => 'c-footer__menu list-unstyled',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
            </div>

            <div class="c-footer__column">
                <h4 class="c-footer__title"><?php esc_html_e( 'Contact Info', 'careme' ); ?></h4>
                <ul class="c-footer__contact list-unstyled">
                    <li>
                        <span class="c-footer__contact-icon">📍</span>
                        <?php echo esc_html( get_theme_mod( 'careme_address', '123 Healthcare Blvd, Medical District, NY 10001' ) ); ?>
                    </li>
                    <li>
                        <span class="c-footer__contact-icon">📞</span>
                        <a href="tel:<?php echo esc_attr( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>">
                            <?php echo esc_html( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>
                        </a>
                    </li>
                    <li>
                        <span class="c-footer__contact-icon">✉️</span>
                        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'careme_email', 'info@careme-dental.com' ) ); ?>">
                            <?php echo esc_html( get_theme_mod( 'careme_email', 'info@careme-dental.com' ) ); ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="c-footer__column">
                <h4 class="c-footer__title"><?php esc_html_e( 'Newsletter', 'careme' ); ?></h4>
                <p class="c-footer__text mb-md"><?php esc_html_e( 'Subscribe for latest dental health tips.', 'careme' ); ?></p>
                <form class="c-footer__newsletter">
                    <input type="email" placeholder="<?php echo esc_attr__( 'Your email', 'careme' ); ?>" required>
                    <button type="submit" class="btn btn--primary">
                        <?php echo careme_get_icon( 'arrow-right' ); ?>
                    </button>
                </form>
            </div>
        </div>

        <div class="c-footer__bottom mt-xl">
            <div class="c-footer__copyright">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'careme' ); ?></p>
            </div>
            <div class="c-footer__legal">
                <a href="#"><?php esc_html_e( 'Privacy Policy', 'careme' ); ?></a>
                <a href="#"><?php esc_html_e( 'Terms of Service', 'careme' ); ?></a>
            </div>
        </div>
    </div>
    
    <button id="back-to-top" class="c-back-to-top js-back-to-top" aria-label="Back to top">
        <?php echo careme_get_icon( 'arrow-right' ); ?>
    </button>
</footer>
