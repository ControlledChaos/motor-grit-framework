<?php
/**
 * Header closing tags and after header actions.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit; ?>
</header>
<?php do_action( 'mg_after_header' ); ?>