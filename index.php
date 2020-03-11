<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>

<?php get_header(); ?>


<?php if ( is_active_sidebar( 'hero' ) ) : ?>
<div id="hero" class="hero-widget" role="complementary">
    <?php dynamic_sidebar( 'hero' ); ?>
</div>
<?php endif; ?>
<main id="main" class="main-content">
    <div class="container">
        <section class="section-content work">
            <h5 class="description">
                <?php echo category_description(1); ?>
            </h5>
            <div class="posts">
                <?php get_template_part( 'template-parts/content/content', 'page' ); ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>