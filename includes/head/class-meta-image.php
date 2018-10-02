<?php
/**
 * Image meta tag.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

class Motor_And_Grit_Meta_Image {

	/**
	 * Constructor magic method.
	 */
	public function __construct() {

		add_action( 'controlled_chaos_meta_image', [ $this, 'image' ] );

	}

	/**
	 * Image meta tag.
	 *
	 * @since  1.0.0
	 */
	public function image() {

		global $post;

        if ( ! is_404() ) {
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Meta Image', [ 1200, 630 ], true, '' );
		}

        if ( has_post_thumbnail() ) {
            $src = $image[0];
        } else {
            $src = get_template_directory_uri() . '/assets/images/default-meta-image.jpg';
        }

        echo $src;

	}

}

// Run the Motor_And_Grit_Meta_Image class.
$controlled_chaos_meta_image = new Motor_And_Grit_Meta_Image;