<?php
// Disable direct file access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * this is a admin page template file to controle the options and settings
 * 
 * @return PANEL_HTML_TEMPLATE
 */
function devinsta_panel_page()
{
?>
    <div class="wrap">
        <h1>Devinsta Panel</h1>

        <form method="post" enctype="multipart/form-data">
            <!-- Logo Upload -->
            <h2>Header</h2>
            <div class="input-box">
                <label>Upload Logo</label>
                <?php
                // Display the uploaded logo (if available).
                $header_logo_attachment_id = get_option('devinsta_header_logo_attachment_id');
                $logo_url = wp_get_attachment_url($header_logo_attachment_id);
                if ($logo_url) : ?>
                    <input type="button" id="header-select-logo-button" class="button-primary" value="Select Image" style="display: none;" />
                    <img src="<?= esc_url($logo_url) ?>" alt="Logo" style="max-width: 200px;" />
                    <button class="button-secondary delete-logo-button" id="delete_header_logo">Delete Logo</button>
                    <input type="hidden" name="header_logo_attachment_id" class="header_logo_attachment_id" id="header-logo-attachment-id" value="<?= esc_attr($header_logo_attachment_id) ?>" />
                <?php else : ?>
                    <img src="" alt="Logo" style="max-width: 200px;display: none;" />
                    <input type="button" id="header-select-logo-button" class="button-primary" value="Select Image" />
                    <input type="hidden" name="header_logo_attachment_id" class="header_logo_attachment_id" id="header-logo-attachment-id" value="<?= esc_attr($header_logo_attachment_id) ?>" />
                <?php endif; ?>
            </div>
            <br>
            <!-- Header Logo Width -->
            <div class="input-box">
                <label for="header_logo_attachment_width">Logo Width</label>
                <input type="number" name="header_logo_attachment_width" id="header_logo_attachment_width" value="<?= absint(get_option('devinsta_header_logo_attachment_width')); ?>" />
            </div>
            <br>
            <!-- Header Logo Height -->
            <div class="input-box">
                <label for="header_logo_attachment_height">Logo Height</label>
                <input type="number" name="header_logo_attachment_height" id="header_logo_attachment_height" value="<?= absint(get_option('devinsta_header_logo_attachment_height')); ?>" />
            </div>
            <br>

            <h2>Typography</h2>
            <!-- Font Family Url -->
            <div class="input-box">
                <label for="font_family_url">Font Family Url</label>
                <input type="text" name="font_family_url" id="font_family_url" value="<?= esc_attr(get_option('devinsta_font_family_url')); ?>" />
            </div>
            <br>
            <!-- Font Family Name -->
            <div class="input-box">
                <label for="font_family_name">Font Family Name</label>
                <input type="text" name="font_family_name" id="font_family_name" value="<?= esc_attr(get_option('devinsta_font_family_name')); ?>" />
            </div>
            <br>
            <!-- Font Family Fallback -->
            <div class="input-box">
                <label for="font_family_fallback">Font Family Fallback</label>
                <input type="text" name="font_family_fallback" id="font_family_fallback" value="<?= esc_attr(get_option('devinsta_font_family_fallback')); ?>" />
            </div>
            <br>
            <!-- Font Family Preload -->
            <div class="input-box">
                <label for="font_family_preload">Font Family Preload</label>
                <div class="radio-box">
                    <label for="font_family_enabled">Enabled</label>
                    <input type="radio" name="font_family_preload" id="font_family_enabled" value="1" <?= absint(get_option('devinsta_font_family_preload')) == "1" ? "checked" : ""; ?> />
                    <span class="radio-spacex"></span>
                    <label for="font_family_disabled">Disabled</label>
                    <input type="radio" name="font_family_preload" id="font_family_disabled" value="0" <?= absint(get_option('devinsta_font_family_preload')) == "0" ? "checked" : ""; ?> />
                </div>
            </div>
            <br>

            <h2>Headings Size</h2>
            <!-- H1 Font Size -->
            <div class="input-box">
                <label for="h1_font_size">H1 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h1_font_size" id="h1_font_size" value="<?= absint(get_option('devinsta_h1_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>
            <!-- H2 Font Size -->
            <div class="input-box">
                <label for="h2_font_size">H2 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h2_font_size" id="h2_font_size" value="<?= absint(get_option('devinsta_h2_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>
            <!-- H3 Font Size -->
            <div class="input-box">
                <label for="h3_font_size">H3 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h3_font_size" id="h3_font_size" value="<?= absint(get_option('devinsta_h3_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>
            <!-- H4 Font Size -->
            <div class="input-box">
                <label for="h4_font_size">H4 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h4_font_size" id="h4_font_size" value="<?= absint(get_option('devinsta_h4_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>
            <!-- H5 Font Size -->
            <div class="input-box">
                <label for="h5_font_size">H5 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h5_font_size" id="h5_font_size" value="<?= absint(get_option('devinsta_h5_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>
            <!-- H6 Font Size -->
            <div class="input-box">
                <label for="h6_font_size">H6 Font Size</label>
                <div class="font-size-input">
                    <input type="number" name="h6_font_size" id="h6_font_size" value="<?= absint(get_option('devinsta_h6_font_size')); ?>" />
                    <span>PX</span>
                </div>
            </div>
            <br>

            <h2>Headings Weight</h2>
            <!-- H1 Font Weight -->
            <div class="input-box">
                <label for="h1_font_weight">H1 Font Weight</label>
                <select name="h1_font_weight" style="width: 100px;" id="h1_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h1_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h1_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h1_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h1_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h1_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h1_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h1_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h1_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h1_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>
            <!-- H2 Font Weight -->
            <div class="input-box">
                <label for="h2_font_weight">H2 Font Weight</label>
                <select name="h2_font_weight" style="width: 100px;" id="h2_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h2_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h2_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h2_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h2_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h2_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h2_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h2_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h2_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h2_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>
            <!-- H3 Font Weight -->
            <div class="input-box">
                <label for="h3_font_weight">H3 Font Weight</label>
                <select name="h3_font_weight" style="width: 100px;" id="h3_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h3_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h3_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h3_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h3_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h3_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h3_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h3_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h3_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h3_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>
            <!-- H4 Font Weight -->
            <div class="input-box">
                <label for="h4_font_weight">H4 Font Weight</label>
                <select name="h4_font_weight" style="width: 100px;" id="h4_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h4_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h4_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h4_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h4_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h4_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h4_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h4_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h4_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h4_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>
            <!-- H5 Font Weight -->
            <div class="input-box">
                <label for="h5_font_weight">H5 Font Weight</label>
                <select name="h5_font_weight" style="width: 100px;" id="h5_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h5_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h5_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h5_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h5_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h5_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h5_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h5_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h5_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h5_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>
            <!-- H6 Font Weight -->
            <div class="input-box">
                <label for="h6_font_weight">H6 Font Weight</label>
                <select name="h6_font_weight" style="width: 100px;" id="h6_font_weight">
                    <option value="100" <?= absint(get_option('devinsta_h6_font_weight')) == 100 ? "selected" : ""; ?>>100</option>
                    <option value="200" <?= absint(get_option('devinsta_h6_font_weight')) == 200 ? "selected" : ""; ?>>200</option>
                    <option value="300" <?= absint(get_option('devinsta_h6_font_weight')) == 300 ? "selected" : ""; ?>>300</option>
                    <option value="400" <?= absint(get_option('devinsta_h6_font_weight')) == 400 ? "selected" : ""; ?>>400</option>
                    <option value="500" <?= absint(get_option('devinsta_h6_font_weight')) == 500 ? "selected" : ""; ?>>500</option>
                    <option value="600" <?= absint(get_option('devinsta_h6_font_weight')) == 600 ? "selected" : ""; ?>>600</option>
                    <option value="700" <?= absint(get_option('devinsta_h6_font_weight')) == 700 ? "selected" : ""; ?>>700</option>
                    <option value="800" <?= absint(get_option('devinsta_h6_font_weight')) == 800 ? "selected" : ""; ?>>800</option>
                    <option value="900" <?= absint(get_option('devinsta_h6_font_weight')) == 900 ? "selected" : ""; ?>>900</option>
                </select>
            </div>
            <br>


            <h2>Color Scheme</h2>
            <!-- Color Primary -->
            <div class="input-box">
                <label for="color_primary">Primary Color</label>
                <input type="color" name="color_primary" id="color_primary" value="<?= sanitize_hex_color(get_option('devinsta_color_primary')); ?>" />
            </div>
            <br>
            <!-- Color Secondary -->
            <div class="input-box">
                <label for="color_secondary">Secondary Color</label>
                <input type="color" name="color_secondary" id="color_secondary" value="<?= sanitize_hex_color(get_option('devinsta_color_secondary')); ?>" />
            </div>
            <br>


            <!-- Footer Content -->
            <h2>Footer</h2>
            <div class="input-box">
                <label>Upload Logo</label>
                <?php
                // Display the uploaded logo (if available).
                $footer_logo_attachment_id = absint(get_option('devinsta_footer_logo_attachment_id'));
                $logo_url = wp_get_attachment_url($footer_logo_attachment_id);
                if ($logo_url) : ?>
                    <input type="button" id="footer-select-logo-button" class="button-primary" value="Select Image" style="display: none;" />
                    <img src="<?= esc_url($logo_url) ?>" alt="Logo" style="max-width: 200px;" />
                    <button class="button-secondary delete-logo-button" id="delete_footer_logo">Delete Logo</button>
                    <input type="hidden" name="footer_logo_attachment_id" class="footer_logo_attachment_id" id="footer-logo-attachment-id" value="<?= esc_attr($footer_logo_attachment_id) ?>" />
                <?php else : ?>
                    <img src="" alt="Logo" style="max-width: 200px;display: none;" />
                    <input type="button" id="footer-select-logo-button" class="button-primary" value="Select Image" />
                    <input type="hidden" name="footer_logo_attachment_id" class="footer_logo_attachment_id" id="footer-logo-attachment-id" value="<?= esc_attr($footer_logo_attachment_id) ?>" />
                <?php endif; ?>
            </div>
            <br>
            <!-- Footer Logo Width -->
            <div class="input-box">
                <label for="footer_logo_attachment_width">Logo Width</label>
                <input type="number" name="footer_logo_attachment_width" id="footer_logo_attachment_width" value="<?= absint(get_option('devinsta_footer_logo_attachment_width')); ?>" />
            </div>
            <br>
            <!-- Footer Logo Height -->
            <div class="input-box">
                <label for="footer_logo_attachment_height">Logo Height</label>
                <input type="number" name="footer_logo_attachment_height" id="footer_logo_attachment_height" value="<?= absint(get_option('devinsta_footer_logo_attachment_height')); ?>" />
            </div>
            <br>
            <br>
            <div class="rich-input-box">
                <label for="textarea_name">Footer Content</label>
                <?php
                $content = wp_kses_post(get_option('devinsta_rich_text_editor'));
                wp_editor($content, 'devinsta_rich_text_editor', array(
                    'textarea_name' => 'devinsta_rich_text_editor',
                ));
                ?>
            </div>

            <br><br>
            <!-- Save Button -->
            <input type="submit" name="save_devinsta_theme_options" class="button-primary" value="Save All Content" />
        </form>
    </div>
<?php
}
