<?php
/**
 * Template tag functions
 * 
 * Convert static class methods to more traditional tags.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since Motor & Grit 1.0.0
 */
namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Page template function
 * 
 * This is used to conditionally get ass standard templates.
 * 
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'mg_template' ) ) :

	function mg_template() {

		$mg_template = require get_theme_file_path( '/template-parts/content/content.php' );

		return $mg_template;

	}

endif;