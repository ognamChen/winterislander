<?php
/**
* Upgrade to pro options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'gridmag' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'gridmag_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new GridMag_Customize_Static_Text_Control( $wp_customize, 'gridmag_upgrade_text_control', array(
        'label'       => esc_html__( 'GridMag Pro', 'gridmag' ),
        'section'     => 'gridmag_section_upgrade',
        'settings' => 'gridmag_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy GridMag? Upgrade to GridMag Pro now and get:', 'gridmag' ).
            '<ul class="gridmag-customizer-pro-features">' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Layout Options (separate options for singular and non-singular pages)', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Page Templates', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Post Templates', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'News Ticker with capability to display posts according to Likes/Views/Comments/Dates and more...', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Posts Grid-Layout Styles (1/2/3/4/5 Columns)', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Posts Grid-Thumbnails Styles (2:1/4:3/2:1/3:4 aspect ratios or auto height)', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Recent/Category/Tag based Featured Posts Widgets with capability to display posts according to Likes/Views/Comments/Dates and more...', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Grid Options (1/2/3/4/5 Columns) and Thumbnail Styles (2:1/4:3/2:1/3:4 aspect ratios or auto height) in Featured Posts Widgets', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget with capability to display posts according to Likes/Views/Comments/Dates and more...', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4/5 columns)', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Share Buttons', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts with Thumbnails (category or tag based)', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Post Meta Box to Control Options in Each Post', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Advanced Post Navigation with Thumbnails', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Random Posts Button in Header and Footer', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Widget Areas', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Support', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Customizer options', 'gridmag' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'gridmag' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.GRIDMAG_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To GridMag PRO', 'gridmag' ) . '</a></strong>'
    ) ) );

}