<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Careme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    
    <!-- Fallback/Default Widgets if dynamic is empty -->
    <?php if ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
        <section class="widget mb-xl">
            <h3 class="widget-title h5 mb-md"><?php esc_html_e( 'Search', 'careme' ); ?></h3>
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'careme' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
                    <button type="submit" class="btn btn--primary"><?php echo careme_get_icon( 'search' ); ?></button>
                </div>
            </form>
        </section>

        <section class="widget mb-xl">
            <h3 class="widget-title h5 mb-md"><?php esc_html_e( 'Categories', 'careme' ); ?></h3>
            <ul class="list-unstyled">
                <li><a href="#"><?php esc_html_e( 'Dental Tips', 'careme' ); ?></a> (5)</li>
                <li><a href="#"><?php esc_html_e( 'Oral Hygiene', 'careme' ); ?></a> (3)</li>
                <li><a href="#"><?php esc_html_e( 'Clinic News', 'careme' ); ?></a> (2)</li>
            </ul>
        </section>
    <?php endif; ?>
</aside>
