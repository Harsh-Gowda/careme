<?php
/**
 * Hero Section Template
 *
 * @package Careme
 */
?>

<section class="c-hero">
    <div class="container">
        <div class="c-hero__content">
            <h2 class="c-hero__title"><?php esc_html_e( 'Expert Care for Your Smile', 'careme' ); ?></h2>
            <p class="c-hero__subtitle"><?php esc_html_e( 'Experience world-class dental services with advanced technology and a compassionate team.', 'careme' ); ?></p>
            <div class="c-hero__actions">
                <a href="#appointment" class="btn btn--primary"><?php esc_html_e( 'Book Appointment', 'careme' ); ?></a>
                <a href="#services" class="btn btn--outline ms-md"><?php esc_html_e( 'Our Services', 'careme' ); ?></a>
            </div>
            
            <div class="c-hero__trust mt-xl">
                <div class="c-trust-badge">
                    <span class="c-trust-badge__icon">⭐</span>
                    <span class="c-trust-badge__text"><strong>5.0</strong> <?php esc_html_e( 'Patient Rating', 'careme' ); ?></span>
                </div>
                <div class="c-trust-badge ms-lg">
                    <span class="c-trust-badge__icon">👥</span>
                    <span class="c-trust-badge__text"><strong>10k+</strong> <?php esc_html_e( 'Happy Patients', 'careme' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
