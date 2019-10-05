<?php
/**
* Getting started options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_getting_started($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_getting_started', array( 'title' => esc_html__( 'Getting Started', 'gridmag' ), 'description' => esc_html__( 'Thanks for your interest in GridMag! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'gridmag_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridMag_Customize_Button_Control( $wp_customize, 'gridmag_documentation_control', array( 'label' => esc_html__( 'Documentation', 'gridmag' ), 'section' => 'gridmag_section_getting_started', 'settings' => 'gridmag_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/gridmag-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'gridmag_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridMag_Customize_Button_Control( $wp_customize, 'gridmag_contact_control', array( 'label' => esc_html__( 'Contact Us', 'gridmag' ), 'section' => 'gridmag_section_getting_started', 'settings' => 'gridmag_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}