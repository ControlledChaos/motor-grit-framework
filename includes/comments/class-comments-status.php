<?php
/**
 * Post comments form status.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Post comments form status.
 */
class Motor_And_Grit_Comments_Status {

    /**
	 * Constructor magic method.
	 */
    public function __construct() {

        // No comments.
        $this->none();

        // Comments closed.
        $this->closed();

    }

    /**
     * No comments.
     * 
     * @since  1.0.0
     */
    public static function none() {

        $comments_none = apply_filters( 'mg_comments_none', sprintf( '<p class="comments-none-closed"><span class="comments-none">%1s</span></p>', __( 'Be the first to comment!', 'motor-grit' ) ) );

        return $comments_none;

    }

    /**
     * Comments closed.
     * 
     * @since  1.0.0
     */
    public static function closed() {

        $comments_closed = apply_filters( 'mg_comments_closed', sprintf( '<p class="comments-none-closed"><span class="comments-closed">%1s</span>.</p>', __( 'Comments are closed for this post', 'motor-grit' ) ) );

        return $comments_closed;

    }

}

$controlled_chaos_comments_status = new Motor_And_Grit_Comments_Status;