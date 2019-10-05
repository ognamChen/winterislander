<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='gridmag-main-wrapper clearfix' id='gridmag-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="gridmag-main-wrapper-inside clearfix">

<?php gridmag_before_main_content(); ?>

<div class='gridmag-posts-wrapper' id='gridmag-posts-wrapper'>

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content', 'page' );

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