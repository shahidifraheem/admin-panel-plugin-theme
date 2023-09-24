<?php
// Disable direct file access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function emebed_devinsta_theme_settings()
{
    // Header logo height and width 
    $header_logo_width = get_option('devinsta_header_logo_attachment_width');
    $header_logo_height = get_option('devinsta_header_logo_attachment_height');
    
    // Font Family 
    $font_family_url = get_option('devinsta_font_family_url');
    $font_family_name = get_option('devinsta_font_family_name');
    $font_family_fallback = get_option('devinsta_font_family_fallback');
    $font_family_preload = get_option('devinsta_font_family_preload');
    
    // Headings Size
    $h1_font_size = get_option('devinsta_h1_font_size');
    $h2_font_size = get_option('devinsta_h2_font_size');
    $h3_font_size = get_option('devinsta_h3_font_size');
    $h4_font_size = get_option('devinsta_h4_font_size');
    $h5_font_size = get_option('devinsta_h5_font_size');
    $h6_font_size = get_option('devinsta_h6_font_size');

    // Headings Weight
    $h1_font_weight = get_option('devinsta_h1_font_weight');
    $h2_font_weight = get_option('devinsta_h2_font_weight');
    $h3_font_weight = get_option('devinsta_h3_font_weight');
    $h4_font_weight = get_option('devinsta_h4_font_weight');
    $h5_font_weight = get_option('devinsta_h5_font_weight');
    $h6_font_weight = get_option('devinsta_h6_font_weight');

    // Color Scheme 
    $primary_color = get_option('devinsta_color_primary');
    $secondary_color = get_option('devinsta_color_secondary');

    // Footer logo height and width 
    $footer_logo_width = get_option('devinsta_footer_logo_attachment_width');
    $footer_logo_height = get_option('devinsta_footer_logo_attachment_height');
?>

    <?php if ($font_family_preload) : ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php endif; ?>
    <?php if ($font_family_url != "") : ?>
    <link href="<?= esc_attr($font_family_url); ?>" rel="stylesheet">
    <?php endif; ?>
    <style>
        :root {
            <?php if ($primary_color != "") : ?>
                --primary-color: <?= esc_attr($primary_color); ?> !important;
            <?php endif;
            if ($secondary_color != "") : ?>
                --secondary-color: <?= esc_attr($secondary_color); ?> !important;
            <?php endif;
            if ($font_family_name != "") : ?>
                --global-font-family: "<?= esc_attr($font_family_name); ?>", <?= esc_attr($font_family_fallback); ?> !important;
            <?php endif; ?>
        }
        
        <?php if ($h1_font_size != "" && $h1_font_weight != "") : ?>
        h1{
            <?php if ($h1_font_size != "") : ?>
                font-size: <?= esc_attr($h1_font_size); ?> !important;
            <?php endif;
            if ($h1_font_weight != "") : ?>
                font-weight: <?= esc_attr($h1_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>
        <?php if ($h2_font_size != "" && $h2_font_weight != "") : ?>
        h2{
            <?php if ($h2_font_size != "") : ?>
                font-size: <?= esc_attr($h2_font_size); ?> !important;
            <?php endif;
            if ($h2_font_weight != "") : ?>
                font-weight: <?= esc_attr($h2_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>
        <?php if ($h3_font_size != "" && $h3_font_weight != "") : ?>
        h3{
            <?php if ($h3_font_size != "") : ?>
                font-size: <?= esc_attr($h3_font_size); ?> !important;
            <?php endif;
            if ($h3_font_weight != "") : ?>
                font-weight: <?= esc_attr($h3_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>
        <?php if ($h4_font_size != "" && $h4_font_weight != "") : ?>
        h4{
            <?php if ($h4_font_size != "") : ?>
                font-size: <?= esc_attr($h4_font_size); ?> !important;
            <?php endif;
            if ($h4_font_weight != "") : ?>
                font-weight: <?= esc_attr($h4_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>
        <?php if ($h5_font_size != "" && $h5_font_weight != "") : ?>
        h5{
            <?php if ($h5_font_size != "") : ?>
                font-size: <?= esc_attr($h5_font_size); ?> !important;
            <?php endif;
            if ($h5_font_weight != "") : ?>
                font-weight: <?= esc_attr($h5_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>
        <?php if ($h6_font_size != "" && $h6_font_weight != "") : ?>
        h6{
            <?php if ($h6_font_size != "") : ?>
                font-size: <?= esc_attr($h6_font_size); ?> !important;
            <?php endif;
            if ($h6_font_weight != "") : ?>
                font-weight: <?= esc_attr($h6_font_weight); ?> !important;
            <?php endif; ?>
        }
        <?php endif; ?>

        .devinsta-header-logo {
            <?php if ($header_logo_width != "") : ?>
                width: <?= esc_attr($header_logo_width); ?>px !important;
            <?php endif;
            if ($header_logo_height != "") : ?>
                height: <?= esc_attr($header_logo_height); ?>px !important;
            <?php endif; ?>
        }

        .devinsta-footer-logo {
            <?php if ($footer_logo_width != "") : ?>
                width: <?= esc_attr($footer_logo_width); ?>px !important;
            <?php endif;
            if ($footer_logo_height != "") : ?>
                height: <?= esc_attr($footer_logo_height); ?>px !important;
            <?php endif; ?>
        }
    </style>
<?php
}

add_action('wp_head', 'emebed_devinsta_theme_settings');
