<?php
/**
* Footer options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_footer_options($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_footer', array( 'title' => esc_html__( 'Footer', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'gridmag_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_html', ) );

    $wp_customize->add_control( 'gridmag_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'gridmag' ), 'section' => 'gridmag_section_footer', 'settings' => 'gridmag_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'gridmag' ), 'section' => 'gridmag_section_footer', 'settings' => 'gridmag_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}