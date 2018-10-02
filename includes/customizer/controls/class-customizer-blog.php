<?php
/**
 * Customizer blog controls.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

// Do not namespace this class.

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Customizer blog controls.
 */
class Customizer_Blog {

    /**
	 * Constructor magic method.
	 */
	public function __construct() {

        // Blog panel.
		add_action( 'customize_register', [ $this, 'blog' ] );

    }

    /**
     * Blog panel.
     */
    public function blog( $wp_customize ) {

        /**
		 * Framework settings panel.
		 */
		$wp_customize->add_section( 'mg_customizer_blog', [
			'priority'    => 35,
			'capability'  => 'edit_theme_options',
			'title'       => __( 'Blog & Archives', 'motor-grit' ),
			'description' => __( 'Content and navigation archives.', 'motor-grit' )
        ] );
        
        // Blog content format.
		$wp_customize->add_setting( 'mg_blog_content_format', [
			'default'	        => 'content',
			'sanitize_callback' => 'mg_sanitize_blog_content_format'
		] );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mg_blog_content_format', [
			'section'     => 'mg_customizer_blog',
			'settings'    => 'mg_blog_content_format',
			'label'       => __( 'Blog Content', 'motor-grit' ),
			'description' => __( 'Full content or excerpts', 'motor-grit' ),
			'type'        => 'select',
			'choices'     => [
				'content' => __( 'Full Content', 'motor-grit' ),
				'excerpt' => __( 'Excerpts', 'motor-grit' )
				]
			]
		) );
		
		// Archive content format.
		$wp_customize->add_setting( 'mg_archive_content_format', [
			'default'	        => 'content',
			'sanitize_callback' => 'mg_sanitize_archive_content_format'
		] );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mg_archive_content_format', [
			'section'     => 'mg_customizer_blog',
			'settings'    => 'mg_archive_content_format',
			'label'       => __( 'Archive Content', 'motor-grit' ),
			'description' => __( 'Full content or excerpts', 'motor-grit' ),
			'type'        => 'select',
			'choices'     => [
				'content' => __( 'Full Content', 'motor-grit' ),
				'excerpt' => __( 'Excerpts', 'motor-grit' )
				]
			]
        ) );
        
        // Blog/archive navigation format.
		$wp_customize->add_setting( 'mg_blog_navigation_format', [
			'default'	        => 'standard',
			'sanitize_callback' => 'mg_sanitize_blog_navigation_format'
		] );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mg_blog_navigation_format', [
			'section'     => 'mg_customizer_blog',
			'settings'    => 'mg_blog_navigation_format',
			'label'       => __( 'Blog Pages Navigation', 'motor-grit' ),
			'description' => __( 'Next/previous links or page count.', 'motor-grit' ),
			'type'        => 'select',
			'choices'     => [
				'standard' => __( 'Next/Previous', 'motor-grit' ),
				'numeric'  => __( 'Page Count', 'motor-grit' )
				]
			]
		) );

    }
    
}

new Customizer_Blog;