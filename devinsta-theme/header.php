<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	$logo_id = get_option('devinsta_header_logo_attachment_id');
	$logo_url = wp_get_attachment_url($logo_id);
	?>
	<header id="devinsta-header">
		<div class="devinsta-header-wrapper">
			<?php if ($logo_url) : ?>
				<div class="devinsta-header-logo-box">
					<a href="<?= site_url(); ?>">
						<img src="<?= esc_attr($logo_url); ?>" class="devinsta-header-logo" alt="<?= bloginfo('name') ?>" />
					</a>
				</div>
			<?php else : ?>
				<h1 class="devinsta-title"><?= bloginfo('name') ?></h1>
			<?php endif; ?>
		</div>
	</header>
	<main id="content">
		<div id="page-content">