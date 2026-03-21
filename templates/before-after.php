<?php
/**
 * Before/After Comparison Section
 *
 * @package Careme
 */
?>

<section id="comparison" class="c-comparison py-xl">
    <div class="container">
        <div class="c-comparison__header text-center mb-xl">
            <h2 class="section-title"><?php esc_html_e( 'Transformation Results', 'careme' ); ?></h2>
            <p class="section-subtitle"><?php esc_html_e( 'See the real impact of our cosmetic dental treatments through actual patient results.', 'careme' ); ?></p>
        </div>

        <div class="c-comparison__wrapper">
            <div class="c-ba-slider js-ba-slider">
                <div class="c-ba-slider__before">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/before.jpg' ); ?>" alt="Before Treatment">
                </div>
                <div class="c-ba-slider__after js-ba-after">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/after.jpg' ); ?>" alt="After Treatment">
                </div>
                <div class="c-ba-slider__handle js-ba-handle">
                    <div class="c-ba-slider__arrow"></div>
                </div>
                <input type="range" min="0" max="100" value="50" class="c-ba-slider__range js-ba-range" aria-label="Slider handle">
            </div>
        </div>
    </div>
</section>
