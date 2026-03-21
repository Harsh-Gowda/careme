<?php
/**
 * Header Style 1 (Standard)
 *
 * @package Careme
 */
?>
<header id="masthead" class="site-header c-header js-sticky-header">
    <div class="container c-header__container d-flex align-items-center justify-content-between">
        <div class="c-header__branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="c-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif; ?>
        </div>

        <div class="c-header__right d-flex align-items-center">
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
                        'menu_class'     => 'c-nav__menu list-unstyled d-flex align-items-center mb-0 gap-3',
                        'fallback_cb'    => '__return_false',
                    ) );
                    ?>
                </div>
            </nav>

            <div class="c-header__cta d-flex align-items-center gap-4">
                <div class="c-header__search js-search-toggle">
                    <?php echo careme_get_icon( 'search' ); ?>
                </div>
                <div class="c-header__contact-item d-flex align-items-center gap-2">
                    <span class="c-header__contact-icon">📞</span>
                    <a href="tel:<?php echo esc_attr( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>" class="c-header__contact-link">
                        <?php echo esc_html( get_theme_mod( 'careme_phone', '+1 234 567 890' ) ); ?>
                    </a>
                </div>
                <a href="#appointment" class="btn btn--primary">
                    <?php echo esc_html( get_theme_mod( 'careme_header_cta_text', __( 'Book Appointment', 'careme' ) ) ); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="c-search-modal js-search-modal">
        <div class="c-search-modal__content">
            <button class="c-search-modal__close js-search-close">&times;</button>
            <form role="search" method="get" class="c-search-modal__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="c-search-modal__input" placeholder="<?php echo esc_attr__( 'Search for treatments...', 'careme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="btn btn--primary"><?php esc_html_e( 'Search', 'careme' ); ?></button>
            </form>
        </div>
    </div>
</header>
