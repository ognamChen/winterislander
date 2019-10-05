<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_widgets_init() {

register_sidebar(array(
    'id' => 'gridmag-header-ad',
    'name' => esc_html__( 'Header Banner', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'gridmag-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-side-widget gridmag-box widget %2$s"><div class="gridmag-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-home-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'gridmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'gridmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-home-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Home Page Only)', 'gridmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of homepage.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Every Page)', 'gridmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of every page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'gridmag' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'gridmag' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'gridmag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'gridmag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-single-post-bottom-widgets',
    'name' => esc_html__( 'Post Bottom Widgets', 'gridmag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of single post. before the comments', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-main-widget widget gridmag-box %2$s"><div class="gridmag-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-top-footer',
    'name' => esc_html__( 'Footer Top', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the top of the footer.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-footer-1',
    'name' => esc_html__( 'Footer 1', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-footer-2',
    'name' => esc_html__( 'Footer 2', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-footer-3',
    'name' => esc_html__( 'Footer 3', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-footer-4',
    'name' => esc_html__( 'Footer 4', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-footer-5',
    'name' => esc_html__( 'Footer 5', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridmag-bottom-footer',
    'name' => esc_html__( 'Footer Bottom', 'gridmag' ),
    'description' => esc_html__( 'This sidebar is located on the bottom of the footer.', 'gridmag' ),
    'before_widget' => '<div id="%1$s" class="gridmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'gridmag_widgets_init' );


function gridmag_sidebar_one_widgets() {
    dynamic_sidebar( 'gridmag-sidebar-one' );
}


function gridmag_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridmag-home-top-fullwidth-widgets' ) || is_active_sidebar( 'gridmag-top-fullwidth-widgets' ) ) : ?>
<div class="gridmag-top-wrapper-outer clearfix">
<div class="gridmag-featured-posts-area gridmag-top-wrapper clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridmag-home-top-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridmag-top-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function gridmag_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridmag-home-bottom-fullwidth-widgets' ) || is_active_sidebar( 'gridmag-bottom-fullwidth-widgets' ) ) : ?>
<div class="gridmag-bottom-wrapper-outer clearfix">
<div class="gridmag-featured-posts-area gridmag-bottom-wrapper clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridmag-home-bottom-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridmag-bottom-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function gridmag_top_widgets() { ?>

<?php if ( is_active_sidebar( 'gridmag-home-top-widgets' ) || is_active_sidebar( 'gridmag-top-widgets' ) ) : ?>
<div class="gridmag-featured-posts-area gridmag-featured-posts-area-top clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridmag-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridmag-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridmag_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridmag-home-bottom-widgets' ) || is_active_sidebar( 'gridmag-bottom-widgets' ) ) : ?>
<div class='gridmag-featured-posts-area gridmag-featured-posts-area-bottom clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridmag-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridmag-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridmag_post_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridmag-single-post-bottom-widgets' ) ) : ?>
<div class="gridmag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'gridmag-single-post-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }