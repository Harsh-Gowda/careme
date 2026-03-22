<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="u-sr-only u-sr-only--focusable c-skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'careme' ); ?></a>

<?php
$header_style = isset($_GET['h']) ? sanitize_text_field($_GET['h']) : get_theme_mod( 'careme_header_style', 'v1' );
get_template_part( 'template-parts/header/header', $header_style );
?>



