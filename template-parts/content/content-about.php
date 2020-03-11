<?php
/**
 * The front page template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post">
    <h2 class="post-title h3">
        <?php the_title(); ?>
    </h2>
    <?php if ( has_excerpt() ): ?>
    <h3 class="post-excerpt">
        <?php the_excerpt(); ?>
    </h3>
    <?php endif; ?>
    
    <?php if ( has_post_thumbnail() ): ?>
        <figure class="wp-block-image">
            <?php the_post_thumbnail(); ?>
        </figure>
    <?php endif; ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>
<?php endwhile; else : ?>

<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>