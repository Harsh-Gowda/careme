<?php
/**
 * Template Name: Client Selection Dashboard
 * Template Post Type: page
 *
 * @package Careme
 */


get_header();

// Selection logic (demo only)
$current_header = isset($_GET['h']) ? sanitize_text_field($_GET['h']) : get_theme_mod('careme_header_style', 'v1');
$current_footer = isset($_GET['f']) ? sanitize_text_field($_GET['f']) : get_theme_mod('careme_footer_style', 'v1');
?>

<div class="c-selection-dashboard py-xl bg-light">
    <div class="container text-center">
        <span class="u-uppercase text-primary small font-weight-bold mb-md d-block" style="letter-spacing: 0.2em;">Design Preview</span>
        <h1 class="display-4 font-weight-bold mb-xl">Select Your Theme Style</h1>
        
        <div class="row g-xl mt-lg">
            <!-- Option 1: Standard -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-xl transition hover-up">
                    <div class="card-body">
                        <h3 class="h5 u-uppercase mb-md">Style 1: Standard</h3>
                        <p class="text-muted small mb-xl">The original CareMe aesthetic. Professional, clean, and reliable for any medical practice.</p>
                        <ul class="list-unstyled small text-start mb-xl">
                            <li class="mb-sm">✓ Sticky Standard Header</li>
                            <li class="mb-sm">✓ Modern Sans-serif Type</li>
                            <li>✓ Corporate Blue Palette</li>
                        </ul>
                        <a href="?h=v1&f=v1" class="btn btn--outline-dark btn--sm w-100">Live Preview</a>
                    </div>
                </div>
            </div>

            <!-- Option 2: Centered -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-xl transition hover-up">
                    <div class="card-body">
                        <h3 class="h5 u-uppercase mb-md">Style 2: Centered</h3>
                        <p class="text-muted small mb-xl">A balanced, symmetrical layout with a focus on branding. Perfect for modern boutique clinics.</p>
                        <ul class="list-unstyled small text-start mb-xl">
                            <li class="mb-sm">✓ Centered Header</li>
                            <li class="mb-sm">✓ Dark Minimal Footer</li>
                            <li>✓ Balanced Symmetrical Grid</li>
                        </ul>
                        <a href="?h=v2&f=v2" class="btn btn--outline-dark btn--sm w-100">Live Preview</a>
                    </div>
                </div>
            </div>

            <!-- Option 3: Pearl Minimal -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-primary p-xl transition hover-up border-top border-primary border-4">
                    <div class="card-body">
                        <div class="badge bg-primary text-white u-uppercase mb-md" style="font-size: 0.7rem; letter-spacing: 0.1em;">Premium</div>
                        <h3 class="h5 u-uppercase mb-md">Style 3: Pearl</h3>
                        <p class="text-muted small mb-xl">Our ultra-luxe, high-contrast design. Inspired by the world's most premium dental clinics.</p>
                        <ul class="list-unstyled small text-start mb-xl">
                            <li class="mb-sm">✓ Pearl Minimal Header</li>
                            <li class="mb-sm">✓ Elegant Serif Typography</li>
                            <li>✓ Muted Gold & Dark Grayscale</li>
                        </ul>
                        <a href="?h=v3&f=v3" class="btn btn--primary btn--sm w-100">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-xl py-lg">
            <p class="text-muted small italic">Note: Live preview uses URL parameters to switch styles temporarily for this session.</p>
        </div>
    </div>
</div>

<style>
.shadow-primary { box-shadow: 0 1rem 3rem rgba(214, 201, 173, 0.2); }
.border-4 { border-width: 4px !important; }
</style>

<?php get_footer(); ?>
