<?php

/**
 * Register Devista panel page at the administrator level
 *
 * @return void
 */
function devinsta_panel_menu()
{
    add_menu_page('Devinsta Panel', 'Devinsta Panel', 'manage_options', 'devinsta-panel', 'devinsta_panel_page');
}
// Hook to add the admin page.
add_action('admin_menu', 'devinsta_panel_menu');

/**
 * Manage the devinsta theme panel page data from the admin panel
 *
 * This will store the data into database after satitization and validation
 * 
 * @return void
 */
function devinsta_save_settings()
{
    if (isset($_POST['save_devinsta_theme_options']) && isset($_GET["page"]) && $_GET["page"] == "devinsta-panel") {

        // Header Logo Validation
        if (isset($_POST['header_logo_attachment_id'])) {
            $header_logo_attachment_id_value = absint($_POST['header_logo_attachment_id']);
            update_option('devinsta_header_logo_attachment_id', $header_logo_attachment_id_value);
        }
        if (isset($_POST['header_logo_attachment_width'])) {
            $header_logo_attachment_width_value = absint($_POST['header_logo_attachment_width']);
            update_option('devinsta_header_logo_attachment_width', $header_logo_attachment_width_value);
        }
        if (isset($_POST['header_logo_attachment_height'])) {
            $header_logo_attachment_height_value = absint($_POST['header_logo_attachment_height']);
            update_option('devinsta_header_logo_attachment_height', $header_logo_attachment_height_value);
        }

        // Font Family Validation
        if (isset($_POST['font_family_url'])) {
            $font_family_url_value = esc_url_raw($_POST['font_family_url']);
            update_option('devinsta_font_family_url', $font_family_url_value);
        }

        if (isset($_POST['font_family_name'])) {
            $font_family_name_value = sanitize_text_field($_POST['font_family_name']);
            update_option('devinsta_font_family_name', $font_family_name_value);
        }

        if (isset($_POST['font_family_fallback'])) {
            $font_family_fallback_value = sanitize_text_field($_POST['font_family_fallback']);
            update_option('devinsta_font_family_fallback', $font_family_fallback_value);
        }

        if (isset($_POST['font_family_preload'])) {
            $font_family_preload_value = absint($_POST['font_family_preload']);
            update_option('devinsta_font_family_preload', $font_family_preload_value);
        }

        // Headings Size Validation
        if (isset($_POST['h1_font_size'])) {
            $h1_font_size_value = absint($_POST['h1_font_size']);
            update_option('devinsta_h1_font_size', $h1_font_size_value);
        }
        if (isset($_POST['h2_font_size'])) {
            $h2_font_size_value = absint($_POST['h2_font_size']);
            update_option('devinsta_h2_font_size', $h2_font_size_value);
        }
        if (isset($_POST['h3_font_size'])) {
            $h3_font_size_value = absint($_POST['h3_font_size']);
            update_option('devinsta_h3_font_size', $h3_font_size_value);
        }
        if (isset($_POST['h4_font_size'])) {
            $h4_font_size_value = absint($_POST['h4_font_size']);
            update_option('devinsta_h4_font_size', $h4_font_size_value);
        }
        if (isset($_POST['h5_font_size'])) {
            $h5_font_size_value = absint($_POST['h5_font_size']);
            update_option('devinsta_h5_font_size', $h5_font_size_value);
        }
        if (isset($_POST['h6_font_size'])) {
            $h6_font_size_value = absint($_POST['h6_font_size']);
            update_option('devinsta_h6_font_size', $h6_font_size_value);
        }

        // Headings Weight Validation
        if (isset($_POST['h1_font_weight'])) {
            $h1_font_weight_value = absint($_POST['h1_font_weight']);
            update_option('devinsta_h1_font_weight', $h1_font_weight_value);
        }
        if (isset($_POST['h2_font_weight'])) {
            $h2_font_weight_value = absint($_POST['h2_font_weight']);
            update_option('devinsta_h2_font_weight', $h2_font_weight_value);
        }
        if (isset($_POST['h3_font_weight'])) {
            $h3_font_weight_value = absint($_POST['h3_font_weight']);
            update_option('devinsta_h3_font_weight', $h3_font_weight_value);
        }
        if (isset($_POST['h4_font_weight'])) {
            $h4_font_weight_value = absint($_POST['h4_font_weight']);
            update_option('devinsta_h4_font_weight', $h4_font_weight_value);
        }
        if (isset($_POST['h5_font_weight'])) {
            $h5_font_weight_value = absint($_POST['h5_font_weight']);
            update_option('devinsta_h5_font_weight', $h5_font_weight_value);
        }
        if (isset($_POST['h6_font_weight'])) {
            $h6_font_weight_value = absint($_POST['h6_font_weight']);
            update_option('devinsta_h6_font_weight', $h6_font_weight_value);
        }

        // Colors Validation
        if (isset($_POST['color_primary'])) {
            $color_primary_value = sanitize_hex_color($_POST['color_primary']);
            update_option('devinsta_color_primary', $color_primary_value);
        }

        if (isset($_POST['color_secondary'])) {
            $color_secondary_value = sanitize_hex_color($_POST['color_secondary']);
            update_option('devinsta_color_secondary', $color_secondary_value);
        }

        // Footer Logo Validation
        if (isset($_POST['footer_logo_attachment_id'])) {
            $footer_logo_attachment_id_value = absint($_POST['footer_logo_attachment_id']);
            update_option('devinsta_footer_logo_attachment_id', $footer_logo_attachment_id_value);
        }
        if (isset($_POST['footer_logo_attachment_width'])) {
            $footer_logo_attachment_width_value = absint($_POST['footer_logo_attachment_width']);
            update_option('devinsta_footer_logo_attachment_width', $footer_logo_attachment_width_value);
        }
        if (isset($_POST['footer_logo_attachment_height'])) {
            $footer_logo_attachment_height_value = absint($_POST['footer_logo_attachment_height']);
            update_option('devinsta_footer_logo_attachment_height', $footer_logo_attachment_height_value);
        }

        // Footer Content Validation
        if (isset($_POST['devinsta_rich_text_editor'])) {
            $rich_text_editor_value = wp_kses_post($_POST['devinsta_rich_text_editor']);
            update_option('devinsta_rich_text_editor', $rich_text_editor_value);
        }
    }
}

add_action('admin_init', 'devinsta_save_settings');
