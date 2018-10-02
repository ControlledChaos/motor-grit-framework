<?php
/**
 * Primary sidebar output.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit;
do_action( 'mg_before_sidebar' ); ?>
<aside class="sidebar primary">
    <?php do_action( 'mg_before_sidebar_content' ); ?>
    <div class="sidebar-content">
        <?php do_action( 'mg_before_sidebar_widgets' ); ?>
        <div class="sidebar-widgets">
            <?php dynamic_sidebar( 'primary-sidebar' ); ?>
        </div>
        <?php do_action( 'mg_after_sidebar_widgets' ); ?>
    </div><!-- sidebar-content -->
    <?php do_action( 'mg_after_sidebar_content' ); ?>
</aside>
<?php do_action( 'mg_after_sidebar' ); ?>