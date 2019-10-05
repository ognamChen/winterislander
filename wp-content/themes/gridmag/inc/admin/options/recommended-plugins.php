<?php
/**
* Recommended plugins options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'gridmag_section_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'gridmag_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => 'gridmag_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new GridMag_Customize_Recommended_Plugins( $wp_customize, 'gridmag_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'gridmag' ), 'section' => 'gridmag_section_recommended_plugins', 'settings' => 'gridmag_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins', 'capability' => 'install_plugins', ) ) );

}