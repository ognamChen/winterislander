<?php
/**
* The header for GridMag theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('gridmag-animated gridmag-fadein'); ?> id="gridmag-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#gridmag-posts-wrapper"><?php esc_html_e( 'Skip to content', 'gridmag' ); ?></a>

<?php if ( !(gridmag_get_option('disable_secondary_menu')) ) { ?>
<div class="gridmag-container gridmag-secondary-menu-container clearfix">
<div class="gridmag-outer-wrapper">
<div class="gridmag-secondary-menu-container-inside clearfix">
<nav class="gridmag-nav-secondary" id="gridmag-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'gridmag' ); ?>">
<button class="gridmag-secondary-responsive-menu-icon" aria-controls="gridmag-menu-secondary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'gridmag' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'gridmag-menu-secondary-navigation', 'menu_class' => 'gridmag-secondary-nav-menu gridmag-menu-secondary', 'fallback_cb' => 'gridmag_top_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(gridmag_get_option('hide_header_date')) ) { ?><div class="gridmag-header-date"><?php echo esc_html(date_i18n(get_option( 'date_format' ))); ?></div><?php } ?>
</nav>
</div>
</div>
</div>
<?php } ?>

<div class="gridmag-outer-wrapper">

<?php gridmag_before_header(); ?>

<div class="gridmag-container" id="gridmag-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="gridmag-head-content clearfix" id="gridmag-head-content">

<?php if ( get_header_image() ) : ?>
<div class="gridmag-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridmag-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="gridmag-header-img"/>
</a>
<?php if ( !(gridmag_get_option('hide_header_image_title')) ) { ?>
<div class="gridmag-header-image-info">
<div class="gridmag-header-image-info-inside">
    <p class="gridmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <p class="gridmag-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
</div>
</div>
<?php } ?>
</div>
<?php endif; ?>

<?php if ( !(gridmag_get_option('hide_header_content')) ) { ?>
<div class="gridmag-header-inside clearfix">
<div class="gridmag-header-inside-content clearfix">

<div class="gridmag-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridmag-logo-img-link">
        <img src="<?php echo esc_url( gridmag_custom_logo() ); ?>" alt="" class="gridmag-logo-img"/>
    </a>
    <div class="gridmag-custom-logo-info"><?php gridmag_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php gridmag_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<div class="gridmag-header-ad">
<?php dynamic_sidebar( 'gridmag-header-ad' ); ?>
</div><!--/.gridmag-header-ad -->

</div>
</div>
<?php } else { ?>
<div class="gridmag-no-header-content">
  <?php gridmag_site_title(); ?>
</div>
<?php } ?>

</div><!--/#gridmag-head-content -->
</div><!--/#gridmag-header -->

<?php gridmag_after_header(); ?>

</div>

<?php if ( !(gridmag_get_option('disable_primary_menu')) ) { ?>
<div class="gridmag-container gridmag-primary-menu-container clearfix">
<div class="gridmag-outer-wrapper">
<div class="gridmag-primary-menu-container-inside clearfix">

<nav class="gridmag-nav-primary" id="gridmag-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gridmag' ); ?>">
<button class="gridmag-primary-responsive-menu-icon" aria-controls="gridmag-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'gridmag' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'gridmag-menu-primary-navigation', 'menu_class' => 'gridmag-primary-nav-menu gridmag-menu-primary', 'fallback_cb' => 'gridmag_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(gridmag_get_option('hide_header_social_buttons')) ) { gridmag_header_social_buttons(); } ?>
</nav>

</div>
</div>
</div>
<?php } ?>

<div id="gridmag-search-overlay-wrap" class="gridmag-search-overlay">
  <button class="gridmag-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'gridmag' ); ?>" title="<?php esc_attr_e('Close Search','gridmag'); ?>">&#xD7;</button>
  <div class="gridmag-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>

<?php gridmag_after_primary_menu(); ?>

<div class="gridmag-outer-wrapper">
<?php gridmag_top_wide_widgets(); ?>
</div>

<div class="gridmag-outer-wrapper">
<div class="gridmag-container clearfix" id="gridmag-wrapper">
<div class="gridmag-content-wrapper clearfix" id="gridmag-content-wrapper">