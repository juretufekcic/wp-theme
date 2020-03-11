<?php
/**
 * Template Name: About template
 * The front page template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>

<?php get_header(); ?>


<main id="main" class="main-content">
    <div class="container">
        <section class="section-content work">
            <h5 class="description">
                <?php echo category_description(); ?>
            </h5>
            <div class="posts">
                <?php get_template_part( 'template-parts/content/content', 'about' ); ?>
            </div>
        </section>
    </div>

    
</main>
<?php get_footer(); ?>