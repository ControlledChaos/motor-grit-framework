<?php
/**
 * Blog pages standard navigation.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

if ( is_search() ) {
    $prev = __( 'Previous Results', 'motor-grit' );
    $next = __( 'More Results', 'motor-grit' );
} else {
    $prev = __( 'Previous Page', 'motor-grit' );
    $next = __( 'Next Page', 'motor-grit' );
}

$prev_posts = apply_filters( 'mg_prev_posts_label', sprintf( '<span>%1s</span>', $prev ) );
$next_posts = apply_filters( 'mg_next_posts_label', sprintf( '<span>%1s</span>', $next ) );
?>
<nav class="posts-nav">
	<span class="prev-page" rel="prev"><?php previous_posts_link( $prev_posts ); ?></span>
	<span class="next-page" rel="next"><?php next_posts_link( $next_posts ); ?></span>
</nav>