<?php
/**
* Post options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_post_options($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_posts', array( 'title' => esc_html__( 'Post Options', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'gridmag_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide HomePage Posts Heading', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'gridmag' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridmag_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridmag_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'gridmag_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'gridmag' ), 'description' => esc_html__('Do you want single post thumbnail to be linked to their post?', 'gridmag'), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridmag'), 'no' => esc_html__('No', 'gridmag') ) ) );


    $wp_customize->add_setting( 'gridmag_options[read_more_length]', array( 'default' => 20, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'gridmag_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'gridmag' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 20 words.', 'gridmag'), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_title_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_title_home_control', array( 'label' => esc_html__( 'Hide Post Titles from Posts Summaries', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_title_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[show_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_show_post_snippet_control', array( 'label' => esc_html__( 'Show Post Snippet', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[show_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Date from Posts Summaries', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_posted_date_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_author_home_control', array( 'label' => esc_html__( 'Hide Post Author from Posts Summaries', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_author_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Posts Summaries', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_comments_link_home_control', array( 'label' => esc_html__( 'Hide Comment Link from Posts Summaries', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_post_navigation]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_post_navigation_control', array( 'label' => esc_html__( 'Hide Post Navigation from Single Posts', 'gridmag' ), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[hide_post_navigation]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[posts_navigation_type]', array( 'default' => 'numberednavi', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_posts_navigation_type' ) );

    $wp_customize->add_control( 'gridmag_posts_navigation_type_control', array( 'label' => esc_html__( 'Posts Navigation Type', 'gridmag' ), 'description' => esc_html__('Select posts navigation type you need. If you activate WP-PageNavi plugin, this navigation will be replaced by WP-PageNavi navigation.', 'gridmag'), 'section' => 'gridmag_section_posts', 'settings' => 'gridmag_options[posts_navigation_type]', 'type' => 'select', 'choices' => array( 'normalnavi' => esc_html__('Normal Navigation', 'gridmag'), 'numberednavi' => esc_html__('Numbered Navigation', 'gridmag') ) ) );

}