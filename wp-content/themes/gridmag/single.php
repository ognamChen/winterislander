<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content', 'single' );

    gridmag_post_navigation();

    gridmag_post_bottom_widgets();

    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;

endwhile; ?>

<div class="clear"></div>
</div><!--/#gridmag-posts-wrapper -->

<?php gridmag_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridmag-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>