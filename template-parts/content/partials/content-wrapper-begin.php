<?php
/**
 * Begin content wrapper.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since Motor & Grit 1.0.0
 */
namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$content_wrapper_class = apply_filters( 'mg_content_wrapper_class', '' );

?>
<div id="content" class="site-content global-wrapper page-wrapper <?php echo $content_wrapper_class; ?>">