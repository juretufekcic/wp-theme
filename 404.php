<?php
/**
 * The 404 pages (not found) template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */

get_header(); ?>

<main id="main" class="main-content page-404" role="main">
    <section class="container">
        <div class="box">
            <h1><span>4</span><span>0</span><span>4</span></h1>
            <h2>Looks like you got lost!</h2>
            <h2>Let me bring you at <a href="<?php echo home_url(); ?>" title="Back to homepage!" class="link">home</a>.</h2>
        </div>
        </section>
</main>

<?php get_footer('404'); ?>
