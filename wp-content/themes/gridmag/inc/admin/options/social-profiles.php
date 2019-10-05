<?php
/**
* Social profiles options
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_social_profiles($wp_customize) {

    $wp_customize->add_section( 'gridmag_section_social', array( 'title' => esc_html__( 'Social Links', 'gridmag' ), 'panel' => 'gridmag_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'gridmag_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_search_button_control', array( 'label' => esc_html__( 'Hide Search Button', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[hide_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_login_button_control', array( 'label' => esc_html__( 'Hide Login Button', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[hide_login_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[hide_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridmag_hide_footer_social_buttons_control', array( 'label' => esc_html__( 'Hide Footer Social Buttons', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[hide_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridmag_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'gridmag_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'gridmag_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_vklink_control', array( 'label' => esc_html__( 'VK Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_githublink_control', array( 'label' => esc_html__( 'Github URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridmag_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridmag_sanitize_email' ) );

    $wp_customize->add_control( 'gridmag_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridmag_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridmag_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridmag_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'gridmag' ), 'section' => 'gridmag_section_social', 'settings' => 'gridmag_options[rsslink]', 'type' => 'text' ) );

}