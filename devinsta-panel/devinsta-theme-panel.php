<?php

/*
 * Plugin Name:       Devninsta Panel
 * Plugin URI:        https://devinsta.com/
 * Description:       This plugin will handle the logo, font, headings control, theme colors and footer
 * Version:           1.0
 * Author:            Devninsta
 * Author URI:        https://devinsta.com/
 * Update URI:        https://devinsta.com/devinsta-panel/
 * Text Domain:       devinstathemepanel
 */

// Disable direct file access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include the admin panel page
require_once plugin_dir_path(__FILE__) . 'includes/admin-page.php';

// Include the admin hooks
include_once plugin_dir_path(__FILE__) . 'includes/admin-hooks.php';

// Include the embed setttings
include_once plugin_dir_path(__FILE__) . 'includes/embed-settings.php';

// Enqueue styles for the admin panel.
add_action('admin_enqueue_scripts', 'devinsta_enqueue_styles');

/**
 * Enqueues scripts and styles.
 *
 * @return void
 */
function devinsta_enqueue_styles()
{
    wp_enqueue_style('devinsta-admin-css', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('devinsta-index-js', plugin_dir_url(__FILE__) . 'assets/js/index.js', array('jquery'), '', true);
}
