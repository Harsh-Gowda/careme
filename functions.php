<?php
/**
 * Careme functions and definitions
 *
 * @package Careme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup theme
 */
function careme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    // Gutenberg & Page Builder Support
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'careme_setup' );

/**
 * Register navigation menus.
 */
function careme_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'careme' ),
        'footer-quick' => esc_html__( 'Footer Quick Links', 'careme' ),
        'footer-services' => esc_html__( 'Footer Services', 'careme' ),
    ) );
}
add_action( 'init', 'careme_menus' );

/**
 * Register widget area.
 */
function careme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'careme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'careme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-xl">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title h5 mb-md">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'careme_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function careme_scripts() {
    wp_enqueue_style( 'careme-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Theme Scripts
    wp_enqueue_script( 'careme-mobile-menu', get_template_directory_uri() . '/src/js/mobile-menu.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-sticky-header', get_template_directory_uri() . '/src/js/sticky-header.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-search-modal', get_template_directory_uri() . '/src/js/search-modal.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-form-validation', get_template_directory_uri() . '/src/js/form-validation.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-testimonial-slider', get_template_directory_uri() . '/src/js/testimonial-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-smooth-scroll', get_template_directory_uri() . '/src/js/smooth-scroll.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-counters', get_template_directory_uri() . '/src/js/counters.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-before-after', get_template_directory_uri() . '/src/js/before-after.js', array(), '1.0.0', true );
    wp_enqueue_script( 'careme-polish', get_template_directory_uri() . '/src/js/polish.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'careme_scripts' );

// Include helper functions
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/icons.php';
require get_template_directory() . '/inc/customizer.php';
