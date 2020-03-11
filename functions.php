<?php 

	function jure_scripts_function() {

		// Include AOS CSS
		wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css',false,'1.1','all');

		// Include Style CSS
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.min.css',false,'1.1','all');
		
		// Include AOS JS
		wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js');
		
		// Include JS
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'));

	}
	add_action('wp_enqueue_scripts','jure_scripts_function');


	// Menu
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	add_action( 'init', 'register_my_menu' );

	// Logo
	function jure_custom_logo_setup() {
		$defaults = array(
			'height'      => 32,
			'width'       => 112,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);

		add_theme_support( 'custom-logo', $defaults );
	}

	add_action( 'after_setup_theme', 'jure_custom_logo_setup' );

	// Logo Custom Class
	add_filter( 'get_custom_logo', 'change_logo_class' );

	function change_logo_class( $html ) {

		$html = str_replace( 'custom-logo', 'branding', $html );
		$html = str_replace( 'custom-logo-link', 'branding', $html );

		return $html;
	}

	// Hero Widget
	function hero_widgets_init() {

		register_sidebar( array(
			'name'          => 'Hero',
			'id'            => 'hero',
			'before_widget' => '<div class="container">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="title">',
			'after_title'   => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'hero_widgets_init' );

	// Footer Widget
	function footer_widgets_init() {

		register_sidebar( array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div class="contact-link">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="title">',
			'after_title'   => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'footer_widgets_init' );

	// Footer Widget
	function copyright_widgets_init() {

		register_sidebar( array(
			'name'          => 'Copyright',
			'id'            => 'copyright',
			'before_widget' => '<div class="contact-link">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="title">',
			'after_title'   => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'copyright_widgets_init' );

	// Remove Widget Title if it Begings with (!) Exclamation Point
	add_filter( 'widget_title', 'remove_widget_title' );
	function remove_widget_title( $widget_title ) {
		if ( substr ( $widget_title, 0, 1 ) == '!' )
			return;
		else
			return ( $widget_title );
	}

	// Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Post Thumbnails
	add_theme_support( 'menu' );

	// Post Thumbnails sizes
	add_image_size('work-small', 454, 520, true);
	add_image_size('work-large', 956, 520, true);

	// Page Title
	add_theme_support( 'title-tag' );

	





?>