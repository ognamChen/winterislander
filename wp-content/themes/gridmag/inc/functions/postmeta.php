<?php
/**
* Post meta functions
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridmag_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function gridmag_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridmag' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="gridmag-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'gridmag' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridmag_grid_cats' ) ) :
function gridmag_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'gridmag' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridmag-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'gridmag' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridmag_grid_postmeta' ) ) :
function gridmag_grid_postmeta() { ?>
    <?php if ( !(gridmag_get_option('hide_post_author_home')) || !(gridmag_get_option('hide_posted_date_home')) ) { ?>
    <div class="gridmag-grid-post-footer">
    <div class="gridmag-grid-post-footer-inside">
    <?php if ( !(gridmag_get_option('hide_post_author_home')) ) { ?><span class="gridmag-grid-post-author gridmag-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(gridmag_get_option('hide_posted_date_home')) ) { ?><span class="gridmag-grid-post-date gridmag-grid-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridmag_single_cats' ) ) :
function gridmag_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'gridmag' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridmag-entry-meta-single gridmag-entry-meta-single-top"><span class="gridmag-entry-meta-single-cats"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'gridmag' ) . '</span></div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridmag_single_postmeta' ) ) :
function gridmag_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridmag_get_option('hide_post_author')) || !(gridmag_get_option('hide_posted_date')) || !(gridmag_get_option('hide_comments_link')) || !(gridmag_get_option('hide_post_edit')) ) { ?>
    <div class="gridmag-entry-meta-single">
    <?php if ( !(gridmag_get_option('hide_post_author')) ) { ?><span class="gridmag-entry-meta-single-author"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="sr-only"><?php esc_html_e('Author:', 'gridmag'); ?></span>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridmag_get_option('hide_posted_date')) ) { ?><span class="gridmag-entry-meta-single-date"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="sr-only"><?php esc_html_e('Published Date:', 'gridmag'); ?></span>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(gridmag_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="gridmag-entry-meta-single-comments"><i class="fa fa-comments-o" aria-hidden="true"></i><span class="sr-only"><?php esc_html_e('Comments:', 'gridmag'); ?></span>&nbsp;<?php comments_popup_link( esc_html__( 'Leave a comment', 'gridmag' ), esc_html__( '1 Comment', 'gridmag' ), esc_html__( '% Comments', 'gridmag' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridmag_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'gridmag' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridmag_grid_postmeta_header' ) ) :
function gridmag_grid_postmeta_header() { ?>
    <?php if ( !(gridmag_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <div class="gridmag-grid-post-header clearfix">
    <span class="gridmag-grid-post-comment gridmag-grid-post-header-meta"><?php comments_popup_link( esc_html__( '0 Comment', 'gridmag' ), esc_html__( '1 Comment', 'gridmag' ), esc_html__( '% Comments', 'gridmag' ) ); ?></span>
    </div>
    <?php } ?><?php } ?>
<?php }
endif;