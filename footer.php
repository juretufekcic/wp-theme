<?php
/**
 * The footer template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>

<footer>
    <div class="container">
        <?php if ( is_active_sidebar( 'footer' ) ) : ?>
        <div class="footer-widget" role="complementary">
            <?php dynamic_sidebar( 'footer' ); ?>
        </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'copyright' ) ) : ?>
        <div class="made-by-widget" role="complementary">
            <?php dynamic_sidebar( 'copyright' ); ?>
        </div>
        <?php endif; ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
AOS.init({
    once: true,
    delay: 400,
});
</script>
</body>

</html>