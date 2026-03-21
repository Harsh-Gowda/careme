<?php
/**
 * Header Style 2 (Centered)
 *
 * @package Careme
 */
?>
<header id="masthead" class="site-header c-header c-header--centered js-sticky-header">
    <div class="container c-header__container">
        <div class="c-header__top d-flex align-items-center justify-content-center py-sm border-bottom">
            <div class="c-header__branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1 class="c-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php endif; ?>
            </div>
        </div>

        <div class="c-header__bottom d-flex align-items-center justify-content-between py-sm">
            <nav id="site-navigation" class="c-nav js-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'careme' ); ?>">
                <button class="c-nav__toggle js-nav-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="u-sr-only"><?php esc_html_e( 'Menu', 'careme' ); ?></span>
                    <span class="c-nav__toggle-icon"></span>
                </button>
                <div class="c-nav__menu-container js-nav-menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'c-nav__menu list-unstyled d-flex align-items-center mb-0 gap-4',
                        'fallback_cb'    => '__return_false',
                    ) );
                    ?>
                </div>
            </nav>

            <div class="c-header__cta d-flex align-items-center gap-4">
                <div class="c-header__search js-search-toggle">
                    <?php echo careme_get_icon( 'search' ); ?>
                </div>
                <a href="#appointment" class="btn btn--primary btn--sm">
                    <?php echo esc_html( get_theme_mod( 'careme_header_cta_text', __( 'Book Appointment', 'careme' ) ) ); ?>
                </a>
            </div>
        </div>
    </div>
</header>
