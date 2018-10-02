<?php
/**
 * Begin the <head> section.
 * 
 * Use the before_html hook for things such as
 * acf_form_head for Advanced Custom Fields
 * conditional frontend forms.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

// Get the site languge.
$language = get_language_attributes();

// Apply filter for adding classes or more attributes.
$tag      = '<html ' . $language . ' class="no-js">';
$html_tag = apply_filters( 'mg_html_tag', $tag );

?>
<!DOCTYPE html>
<?php do_action( 'before_html' ); ?>
<?php echo $html_tag; ?>