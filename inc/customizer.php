<?php
/**
 * Careme Customizer functionality
 *
 * @package Careme
 */

function careme_customize_register( $wp_customize ) {
    // Contact Information Section
    $wp_customize->add_section( 'careme_contact_info', array(
        'title'    => __( 'Contact Information', 'careme' ),
        'priority' => 30,
    ) );

    // Phone Setting
    $wp_customize->add_setting( 'careme_phone', array(
        'default'           => '+1 234 567 890',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_phone', array(
        'label'    => __( 'Phone Number', 'careme' ),
        'section'  => 'careme_contact_info',
        'type'     => 'text',
    ) );

    // Email Setting
    $wp_customize->add_setting( 'careme_email', array(
        'default'           => 'info@careme-dental.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_email', array(
        'label'    => __( 'Email Address', 'careme' ),
        'section'  => 'careme_contact_info',
        'type'     => 'email',
    ) );

    // Address Setting
    $wp_customize->add_setting( 'careme_address', array(
        'default'           => '123 Healthcare Blvd, Medical District, NY 10001',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_address', array(
        'label'    => __( 'Physical Address', 'careme' ),
        'section'  => 'careme_contact_info',
        'type'     => 'textarea',
    ) );

    // Header Call to Action Setting
    $wp_customize->add_setting( 'careme_header_cta_text', array(
        'default'           => 'Book Appointment',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_header_cta_text', array(
        'label'    => __( 'Header CTA Text', 'careme' ),
        'section'  => 'careme_contact_info',
        'type'     => 'text',
    ) );

    // Layout Options Section
    $wp_customize->add_section( 'careme_layout_options', array(
        'title'    => __( 'Layout Options', 'careme' ),
        'priority' => 31,
    ) );

    // Header Style Setting
    $wp_customize->add_setting( 'careme_header_style', array(
        'default'           => 'v1',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_header_style', array(
        'label'    => __( 'Header Style', 'careme' ),
        'section'  => 'careme_layout_options',
        'type'     => 'select',
        'choices'  => array(
            'v1' => __( 'Style 1 (Standard)', 'careme' ),
            'v2' => __( 'Style 2 (Centered)', 'careme' ),
            'v3' => __( 'Style 3 (Pearl Minimal)', 'careme' ),

        ),
    ) );

    // Footer Style Setting
    $wp_customize->add_setting( 'careme_footer_style', array(
        'default'           => 'v1',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'careme_footer_style', array(
        'label'    => __( 'Footer Style', 'careme' ),
        'section'  => 'careme_layout_options',
        'type'     => 'select',
        'choices'  => array(
            'v1' => __( 'Style 1 (Standard)', 'careme' ),
            'v2' => __( 'Style 2 (Dark Minimal)', 'careme' ),
            'v3' => __( 'Style 3 (Dark Pearl)', 'careme' ),

        ),
    ) );
    // Hero Section
    $wp_customize->add_section( 'careme_hero_options', array(
        'title'    => __( 'Hero Section (Pearl)', 'careme' ),
        'priority' => 32,
    ) );

    // Hero Title
    $wp_customize->add_setting( 'careme_hero_title', array(
        'default'           => __( 'Smiles That Speak', 'careme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'careme_hero_title', array(
        'label'    => __( 'Hero Title', 'careme' ),
        'section'  => 'careme_hero_options',
        'type'     => 'text',
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'careme_hero_subtitle', array(
        'default'           => __( 'EXPERIENCE LUXURY DENTAL CARE IN THE HEART OF THE DISTRICT', 'careme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'careme_hero_subtitle', array(
        'label'    => __( 'Hero Subtitle', 'careme' ),
        'section'  => 'careme_hero_options',
        'type'     => 'text',
    ) );

    // Hero CTA Text
    $wp_customize->add_setting( 'careme_hero_cta', array(
        'default'           => __( 'Discover Our Services', 'careme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'careme_hero_cta', array(
        'label'    => __( 'Hero CTA Text', 'careme' ),
        'section'  => 'careme_hero_options',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'careme_customize_register' );

