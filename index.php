<?php
/**
 * Content index class.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since Motor & Grit 1.0.0
 */
namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

class Index {

	/**
	 * Constructor magic method.
	 */
	public function __construct() {

		// Begin HTML and get <head> section.
		get_header();

		// Extensibility hook.
		do_action( 'mg_before_post' );

		/**
		 * Run class for sidebars and widget areas.
		 * 
		 * Needs to run before the loop.
		 */
		get_sidebar();

		// Content templates.
		require get_theme_file_path( '/template-parts/content/content.php' );

		// Extensibility hook.
		do_action( 'mg_after_post' );

		// Load scripts and close HTML.
		get_footer();

	}

}

// Run the Index class.
new Index;