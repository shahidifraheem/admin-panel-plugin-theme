<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */

?>
</div>
</main>
<?php
$logo_id = get_option('devinsta_footer_logo_attachment_id');
$logo_url = wp_get_attachment_url($logo_id);
$footer_content = get_option('devinsta_rich_text_editor');
?>
<footer id="devinsta-footer">
	<div class="devinsta-footer-wrapper">
		<?php if ($logo_url) : ?>
			<div class="devinsta-footer-logo-box">
				<a href="<?= site_url(); ?>">
					<img src="<?= esc_attr($logo_url); ?>" class="devinsta-footer-logo" alt="<?= bloginfo('name') ?>" />
				</a>
			</div>
		<?php endif;
		if (!empty($footer_content)) : ?>
			<div class="devinsta-footer-content">
				<?= wp_kses_post($footer_content) ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="privacy-policy">
		<?php
		if (function_exists('the_privacy_policy_link')) {
			the_privacy_policy_link('<div class="privacy-policy">', '</div>');
		}
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>