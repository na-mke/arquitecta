<?php

/**
 * Functions
 *
 * Core functionality and initial theme setup
 *
 * @package WordPress
 * @subpackage Arquitecta for WordPress
 * @since Arquitecta for WordPress 0.0.1
 */

/* ENQUEUE CSS & JS */

if ( ! function_exists( 'arquitecta_css' ) ) :

	function arquitecta_css() {

		if (!is_admin()) {

			wp_dequeue_style( 'infrastrukt');
			wp_deregister_style( 'infrastrukt');
			wp_enqueue_style( 'arquitecta', get_stylesheet_uri(), array(), '1.0', 'all' );

		}

	}

	add_action( 'wp_enqueue_scripts', 'arquitecta_css', 100 );

endif;

if ( ! function_exists( 'arquitecta_js' ) ) :

	function arquitecta_js() {

		if (!is_admin()) {

			wp_dequeue_script( 'infrastrukt-js');
			wp_deregister_script( 'infrastrukt-js');
			wp_enqueue_script( 'arquitecta-js', get_stylesheet_directory_uri().'/js/app.js', array('jquery'), '1.0', true);

		}
	}

	add_action( 'wp_enqueue_scripts', 'arquitecta_js', 100 );

endif;


?>