<?php

/**
 *
 * This is the template that displays the singple post inside the loop and single.php.
 *
 * @package WordPress
 * @subpackage Devinsta_Theme_Panel
 * @since Devinsta Theme Panel 1.0
 */
?>
<div class="<?php echo post_class(); ?>">
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-img">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="details">
        <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
</div>