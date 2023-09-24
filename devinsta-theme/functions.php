<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */


if (!function_exists('devinsta_theme_panel_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Devinsta Theme Panel 1.0
	 *
	 * @return void
	 */
	function devinsta_theme_panel_setup()
	{

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'devinstathemepanel'),
				'footer'  => esc_html__('Secondary menu', 'devinstathemepanel'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__('Extra small', 'devinstathemepanel'),
					'shortName' => esc_html_x('XS', 'Font size', 'devinstathemepanel'),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__('Small', 'devinstathemepanel'),
					'shortName' => esc_html_x('S', 'Font size', 'devinstathemepanel'),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__('Normal', 'devinstathemepanel'),
					'shortName' => esc_html_x('M', 'Font size', 'devinstathemepanel'),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__('Large', 'devinstathemepanel'),
					'shortName' => esc_html_x('L', 'Font size', 'devinstathemepanel'),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__('Extra large', 'devinstathemepanel'),
					'shortName' => esc_html_x('XL', 'Font size', 'devinstathemepanel'),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__('Huge', 'devinstathemepanel'),
					'shortName' => esc_html_x('XXL', 'Font size', 'devinstathemepanel'),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__('Gigantic', 'devinstathemepanel'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'devinstathemepanel'),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__('Black', 'devinstathemepanel'),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__('Dark gray', 'devinstathemepanel'),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__('Gray', 'devinstathemepanel'),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__('Green', 'devinstathemepanel'),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__('Blue', 'devinstathemepanel'),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__('Purple', 'devinstathemepanel'),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__('Red', 'devinstathemepanel'),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__('Orange', 'devinstathemepanel'),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__('Yellow', 'devinstathemepanel'),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__('White', 'devinstathemepanel'),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__('Purple to yellow', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to purple', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__('Green to yellow', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to green', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__('Red to yellow', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to red', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__('Purple to red', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__('Red to purple', 'devinstathemepanel'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for link color control.
		add_theme_support('link-color');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support('custom-units');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_empty_string');
	}
}
add_action('after_setup_theme', 'devinsta_theme_panel_setup');

/**
 * Registers widget area.
 *
 * @since Devinsta Theme Panel 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function devinsta_theme_panel_widgets_init()
{

	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'devinstathemepanel'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'devinstathemepanel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'devinsta_theme_panel_widgets_init');

/**
 * Enqueues scripts and styles.
 *
 * @since Devinsta Theme Panel 1.0
 *
 * @global bool       $is_IE
 * @global WP_Scripts $wp_scripts
 *
 * @return void
 */
function devinsta_theme_panel_scripts()
{
	wp_enqueue_style('devinsta-theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'devinsta_theme_panel_scripts');