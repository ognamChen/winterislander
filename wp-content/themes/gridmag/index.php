<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="gridmag-main-wrapper clearfix" id="gridmag-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridmag-main-wrapper-inside clearfix">

<?php gridmag_before_main_content(); ?>

<div class="gridmag-posts-wrapper" id="gridmag-posts-wrapper">

<?php if ( !(gridmag_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( gridmag_get_option('posts_heading') ) : ?>
<h2 class="gridmag-posts-heading"><span><?php echo esc_html( gridmag_get_option('posts_heading') ); ?></span></h2>
<?php else : ?>
<h2 class="gridmag-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'gridmag' ); ?></span></h2>
<?php endif; ?>
<?php } ?>
<?php } ?>

<div class="gridmag-posts-content">
<div class="gridmag-posts-container">

<?php if (have_posts()) : ?>

    <div class="gridmag-posts">
    <div class="<?php echo esc_attr( gridmag_post_grid_cols() ); ?>-sizer"></div>
    <div class="<?php echo esc_attr( gridmag_post_grid_cols() ); ?>-gutter"></div>
    <?php $gridmag_total_posts = $wp_query->post_count; ?>
    <?php $gridmag_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php $gridmag_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php gridmag_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#gridmag-posts-wrapper -->

<?php gridmag_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridmag-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>