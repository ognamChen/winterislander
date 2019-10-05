<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="gridmag-grid-post <?php echo esc_attr( gridmag_post_grid_cols() ); ?>">
<div class="gridmag-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(gridmag_get_option('hide_thumbnail')) ) { ?>
    <div class="gridmag-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridmag-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridmag' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(gridmag_grid_thumb_style(), array('class' => 'gridmag-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?></a>
        <?php gridmag_grid_postmeta_header(); ?>
        <?php if ( !(gridmag_get_option('hide_post_categories_home')) ) { gridmag_grid_cats(); } ?>
        <?php gridmag_sticky_post_icon(); ?>
    </div>
    <?php } else { ?>
    <div class="gridmag-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridmag-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridmag' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( gridmag_grid_no_thumb_url() ); ?>" class="gridmag-grid-post-thumbnail-img"/></a>
        <?php gridmag_grid_postmeta_header(); ?>
        <?php if ( !(gridmag_get_option('hide_post_categories_home')) ) { gridmag_grid_cats(); } ?>
        <?php gridmag_sticky_post_icon(); ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="gridmag-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridmag-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridmag' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( gridmag_grid_no_thumb_url() ); ?>" class="gridmag-grid-post-thumbnail-img"/></a>
        <?php gridmag_grid_postmeta_header(); ?>
        <?php if ( !(gridmag_get_option('hide_post_categories_home')) ) { gridmag_grid_cats(); } ?>
        <?php gridmag_sticky_post_icon(); ?>
    </div>
    <?php } ?>

    <div class="gridmag-grid-post-details">
    <?php if ( !(gridmag_get_option('hide_post_title_home')) ) { ?><?php the_title( sprintf( '<h3 class="gridmag-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?><?php } ?>

    <?php if ( gridmag_get_option('show_post_snippet') ) { ?><div class="gridmag-grid-post-snippet"><div class="gridmag-grid-post-snippet-inside"><?php the_excerpt(); ?></div></div><?php } ?>

    <?php gridmag_grid_postmeta(); ?>
    </div>

</div>
</div>