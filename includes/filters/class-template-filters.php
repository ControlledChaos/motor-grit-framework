<?php
/**
 * Template filters.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Template filters.
 */
class Template_Filters {

	/**
	 * Constructor magic method.
	 */
	public function __construct() {

        add_filter( 'image_size_names_choose', [ $this, 'image_size_choose' ] );

    }

    /**
     * Image sizes to insert into posts.
     */
    public function image_size_choose( $size_names ) {

        global $_wp_additional_image_sizes;

		$sizes = [
			'thumbnail' => esc_html__( 'Thumbnail', 'motor-grit' ),
			'medium'    => esc_html__( 'Medium', 'motor-grit' ),
            'large'     => esc_html__( 'Large', 'motor-grit' ),
            'banner'    => esc_html__( 'Banner', 'motor-grit' ),
            'video'     => esc_html__( 'HD Video', 'motor-grit' )
		];

		$insert_sizes = apply_filters( 'mg_insert_image_sizes', $sizes );
		return $insert_sizes;

    }

}

new Template_Filters;