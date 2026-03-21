<?php
/**
 * Footer Style 2 (Dark Minimal)
 *
 * @package Careme
 */
?>
<footer id="colophon" class="c-footer c-footer--minimal bg-dark text-white py-lg">
    <div class="container text-center">
        <div class="c-footer__logo mb-md">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-footer__site-title text-white h4"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
        </div>
        
        <nav class="c-footer__nav mb-lg">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'list-unstyled d-flex justify-content-center gap-4 mb-0',
                'fallback_cb'    => '__return_false',
            ) );
            ?>
        </nav>

        <div class="c-footer__socials mb-lg">
            <a href="#" class="c-footer__social-link text-white mx-2"><?php echo careme_get_icon( 'facebook' ); ?></a>
            <a href="#" class="c-footer__social-link text-white mx-2"><?php echo careme_get_icon( 'twitter' ); ?></a>
            <a href="#" class="c-footer__social-link text-white mx-2"><?php echo careme_get_icon( 'instagram' ); ?></a>
        </div>

        <div class="c-footer__bottom pt-md border-top border-secondary">
            <p class="mb-0">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'careme' ); ?></p>
        </div>
    </div>
</footer>
