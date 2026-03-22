<?php
/**
 * Footer Template
 *
 * @package Careme
 */
?>

<?php
$footer_style = isset($_GET['f']) ? sanitize_text_field($_GET['f']) : get_theme_mod( 'careme_footer_style', 'v1' );
get_template_part( 'template-parts/footer/footer', $footer_style );
?>


    <?php wp_footer(); ?>
</body>
</html>
