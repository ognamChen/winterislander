<?php
/**
* More Custom Functions
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function gridmag_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $gridmag_custom_logo_id = get_theme_mod( 'custom_logo' );
    $gridmag_logo = wp_get_attachment_image_src( $gridmag_custom_logo_id , 'full' );
    return $gridmag_logo[0];
}

// Site Title
function gridmag_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_singular() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_category() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_tag() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_author() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_search() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_404() ) { ?>
            <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } else { ?>
            <h1 class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php }
}

// Category ids in post class
function gridmag_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'gridmag_category_id_class');

// Change excerpt length
function gridmag_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 20;
    if ( gridmag_get_option('read_more_length') ) {
        $read_more_length = gridmag_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'gridmag_excerpt_length');

// Change excerpt more word
function gridmag_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'gridmag_excerpt_more');

// Adds custom classes to the array of body classes.
function gridmag_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'gridmag-group-blog';
    }

    if ( get_header_image() ) {
        $classes[] = 'gridmag-header-image-active';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'gridmag-custom-logo-active';
    }

    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $classes[] = 'gridmag-layout-full-width';
        }
    } else {
        if ( is_404() ) {
            $classes[] = 'gridmag-layout-full-width';
        }
    }

    if ( !is_active_sidebar( 'gridmag-home-bottom-widgets' ) && !is_active_sidebar( 'gridmag-bottom-widgets' ) ) {
        $classes[] = 'gridmag-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'gridmag_body_classes' );


function gridmag_grid_thumb_style() {
       $thumb_style = 'gridmag-four-three-image';
       return $thumb_style;
}

function gridmag_post_grid_cols() {
       $post_column = 'gridmag-3-col';
       return $post_column;
}

function gridmag_grid_no_thumb_url() {
       $thumb_url = get_template_directory_uri() . '/assets/images/no-image-4-3.jpg';
       return $thumb_url;
}

function gridmag_header_image() {
    if ( get_header_image() ) : ?>
    <div class="gridmag-header-image clearfix">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridmag-header-img-link">
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="gridmag-header-img"/>
    </a>
    </div>
    <?php endif;
}

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;

// Display sticky post icon
function gridmag_sticky_post_icon() {
    global $post;
    if ( is_sticky() ) { ?>
    <div class="gridmag-sticky-post-icon-wrapper"><div class="gridmag-sticky-post-icon"><i class="fa fa-thumb-tack" aria-hidden="true" title="<?php esc_attr_e('Sticky Post','gridmag'); ?>"></i><span class="sr-only"><?php esc_html_e('Sticky Post', 'gridmag'); ?></span></div></div>
    <?php }
}