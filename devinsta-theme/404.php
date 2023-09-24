<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */

get_header();
?>

<header class="page-header">
	<h1 class="page-title"><?php esc_html_e('Nothing here', 'devinstathemepanel'); ?></h1>
</header>

<div class="error-404 not-found default-max-width">
	<div class="page-content">
		<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'devinstathemepanel'); ?></p>
		<?php get_search_form(); ?>
	</div>
</div>

<?php
get_footer();
