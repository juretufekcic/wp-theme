<?php
/**
 * The single template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>

<?php get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>



        <?php get_template_part( 'template-parts/content/content', 'single' ); ?>

        

        <?php get_template_part( 'template-parts/related/related', '' ); ?>
        
        
        <?php if ( comments_open() || get_comments_number() ) {
           // comments_template();
        } ?>
        <?php endwhile; ?>

    </div>
</main>
<?php get_footer(); ?>