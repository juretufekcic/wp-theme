<?php
/**
 * The header template file
 *
 * @package WordPress
 * @subpackage Jure
 * @since 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="preloader js-preloader flex-center">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div class="site-content">
        <header class="header">
            <div class="container">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } ?>
                <nav id="main-navigation" class="navigation" role="navigation">
                    <a href="#" class="navbar-button mobile-only">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'header-menu' 
                    ) ); ?>
                </nav>
            </div>
        </header>