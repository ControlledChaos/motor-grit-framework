<?php
/**
 * Body element tag.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="<?php do_action( 'mg_body_schema' ); ?>">
