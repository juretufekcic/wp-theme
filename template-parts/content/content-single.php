<?php
/**
 * The post content template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */

 $role = get_post_meta($post->ID, 'role', true);
 $client = get_post_meta($post->ID, 'client', true);
 $year = get_post_meta($post->ID, 'year', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="post-title h3"><?php the_title(); ?></h2>
    <?php if ( has_excerpt() ): ?>
        <h3 class="post-excerpt">
            <?php the_excerpt(); ?>
        </h3>
    <?php endif; ?>
    <?php if ( !empty($role) || !empty($client) || !empty($year) ) : ?>
    <div class="project-info two-one-one">
        <?php if ( !empty($role) ) : ?>
        <div>
            <h6>My role</h6>
            <p><?php echo $role; ?></p>
        </div>
        <?php endif; ?>
        <?php if ( !empty($client) ) : ?>
        <div>
            <h6>Client</h6>
            <p><?php echo $client; ?></p>
        </div>
        <?php endif; ?>
        <?php if ( !empty($year) ) : ?>
        <div>
            <h6>Year</h6>
            <p><?php echo $year; ?></p>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php if ( has_post_thumbnail() ): ?>
        <figure class="wp-block-image">
            <?php the_post_thumbnail('work-big'); ?>
        </figure>
    <?php endif; ?>

    <div class="post-content"><?php the_content(); ?></div>
    
</article>