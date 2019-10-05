<?php
/**
* Header options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_header_options($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_header', array( 'title' => esc_html__( 'Header Options', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'gridmag_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'gridmag' ), 'section' => 'gridmag_section_header', 'settings' => 'gridmag_options[hide_header_content]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_header_image_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_header_image_title_control', array( 'label' => esc_html__( 'Hide Site Title and Description from Header Image', 'gridmag' ), 'section' => 'header_image', 'settings' => 'gridmag_options[hide_header_image_title]', 'type' => 'checkbox', ) );

}