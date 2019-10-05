<?php
/**
* Other options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_other_options($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_other_options', array( 'title' => esc_html__( 'Other Options', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 560 ) );

    $wp_customize->add_setting( 'gridmag_options[enable_sticky_mobile_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_enable_sticky_mobile_menu_control', array( 'label' => esc_html__( 'Enable Sticky Menu on Small Screen', 'gridmag' ), 'section' => 'gridmag_section_other_options', 'settings' => 'gridmag_options[enable_sticky_mobile_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'gridmag' ), 'section' => 'gridmag_section_other_options', 'settings' => 'gridmag_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'gridmag' ), 'section' => 'gridmag_section_other_options', 'settings' => 'gridmag_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_header_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_header_date_control', array( 'label' => esc_html__( 'Hide Header Date', 'gridmag' ), 'section' => 'gridmag_section_other_options', 'settings' => 'gridmag_options[hide_header_date]', 'type' => 'checkbox', ) );

}