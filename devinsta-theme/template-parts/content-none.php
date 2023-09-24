<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * This will show where if posts not found
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */
?>
<section class="no-results">
    <div class="universal-header">
        <?php if (is_search()) : ?>
            <h3 class="page-title title">
                <?php
                printf(
                    esc_html__('Results for "%s"', 'devinstathemepanel'),
                    '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
                );
                ?>
            </h3>
        <?php endif; ?>
    </div>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <h3 class="title"><?php esc_html_e('Not Found!', 'devinstathemepanel'); ?></h3>
            <?php
            printf(
                '<p class="mb-2">' . wp_kses(
                    __('Ready to publish your first post? <div class="universal-btn"><a href="%s">Get started here</a></div>', 'devinstathemepanel'),
                    array(
                        'div' => array(
                            'class' => array(),
                        ),
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
            ?>

        <?php elseif (is_search()) : ?>
            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'devinstathemepanel'); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <h3><?php esc_html_e('Not Found!', 'devinstathemepanel'); ?></h3>
            <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'devinstathemepanel'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>