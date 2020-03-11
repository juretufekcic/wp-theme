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
	<?php if ( has_post_thumbnail() ): ?>
	<figure class="media">
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="link">
			<?php the_post_thumbnail('work-small'); ?>
		</a>
	</figure>
	<?php endif; ?>
	<h2 class="title">
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="link">
			<?php the_title(); ?>
		</a>
	</h2>
	<a href="<?php the_permalink(); ?>" rel="bookmark"
		class="button link"><?php esc_html_e( 'View case study' ); ?></a>
</article>
<?php endwhile; else : ?>

<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>