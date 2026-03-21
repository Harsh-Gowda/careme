<?php
/**
 * Custom template functions
 *
 * @package Careme
 */

/**
 * Filter classes for body tag
 */
function careme_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    return $classes;
}
add_filter( 'body_class', 'careme_body_classes' );
