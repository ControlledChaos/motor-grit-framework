<?php
/**
 * Footer opening tags and before footer actions.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'mg_before_footer' );

echo '<footer>', "\r";