<?php
/**
 * Front page HTML output.
 *
 * @package WordPress
 * @subpackage Motor_And_Grit
 * @since  1.0.0
 */

namespace MG_Framework;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div id="content" class="site-content global-wrapper page-wrapper">
    <?php do_action( 'mg_before_main' ); ?>
    <main class="main" role="main" itemscope itemprop="mainContentOfPage">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php do_action( 'mg_before_article' ); ?>
        <article class="hentry" id="post-<?php the_ID(); ?>" role="article">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </header>
            <div class="entry-content" itemprop="articleBody">
                <?php if ( '' !== get_the_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php
                    $size = apply_filters( 'mg_front_page_thumbnail_size', 'large' );
                    $args = apply_filters( 'mg_front_page_thumbnail_args', [
                        'class' => 'alignnone'
                    ] );
                    echo get_the_post_thumbnail( $post->ID, $size, $args ); ?>
                </div><!-- post-thumbnail -->
                <?php endif; ?>
                <?php do_action( 'mg_before_content' ); ?>
                <?php the_content(); ?>
                <?php do_action( 'mg_after_content' ); ?>
            </div><!-- entry-content -->
        </article>
        <?php do_action( 'mg_after_article' ); ?>
    <?php endwhile; endif; ?>
    </main>
    <?php do_action( 'mg_after_main' ); ?>
    <?php do_action( 'mg_content_aside' ); ?>
</div><!-- site-content -->