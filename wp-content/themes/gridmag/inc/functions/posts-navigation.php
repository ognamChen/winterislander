<?php
/**
* Posts navigation functions
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridmag_wp_pagenavi' ) ) :
function gridmag_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;


if ( ! function_exists( 'gridmag_posts_navigation' ) ) :
function gridmag_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        gridmag_wp_pagenavi();
    } else {
        if ( gridmag_get_option('posts_navigation_type') === 'normalnavi' ) {
            the_posts_navigation(array('prev_text' => esc_html__( '&larr; Older posts', 'gridmag' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'gridmag' )));
        } else {
            the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Older posts', 'gridmag' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'gridmag' )));
        }
    }
}
endif;


if ( ! function_exists( 'gridmag_post_navigation' ) ) :
function gridmag_post_navigation() {
    global $post;
    if ( !(gridmag_get_option('hide_post_navigation')) ) {
        the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'gridmag' ), 'next_text' => esc_html__( '%title &rarr;', 'gridmag' )));
    }
}
endif;