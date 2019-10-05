<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php gridmag_before_single_page(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridmag-post-singular gridmag-box'); ?>>
<div class="gridmag-box-inside">

    <?php gridmag_before_single_page_title(); ?>

    <header class="entry-header">
    <div class="entry-header-inside">
        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </div>
    </header><!-- .entry-header -->

    <?php gridmag_after_single_page_title(); ?>

    <div class="entry-content clearfix">
            <?php
            if ( has_post_thumbnail() ) {
                if ( !(gridmag_get_option('hide_thumbnail')) ) {
                    if ( !(gridmag_get_option('hide_thumbnail_single')) ) {
                        if ( gridmag_get_option('thumbnail_link') == 'no' ) { ?>
                        <div class="gridmag-post-thumbnail-single-holder">
                        <?php
                            if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-page-sidebar.php' ) ) ) {
                                the_post_thumbnail('gridmag-large-image', array('class' => 'gridmag-post-thumbnail-single', 'title' => the_title_attribute('echo=0')));
                            } else {
                                the_post_thumbnail('gridmag-featured-image', array('class' => 'gridmag-post-thumbnail-single', 'title' => the_title_attribute('echo=0')));
                            }
                        ?>
                        </div>
                        <?php } else { ?>
                        <div class="gridmag-post-thumbnail-single-holder">
                            <?php if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-page-sidebar.php' ) ) ) { ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridmag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridmag-post-thumbnail-single-link"><?php the_post_thumbnail('gridmag-large-image', array('class' => 'gridmag-post-thumbnail-single', 'title' => the_title_attribute('echo=0'))); ?></a>
                            <?php } else { ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridmag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridmag-post-thumbnail-single-link"><?php the_post_thumbnail('gridmag-featured-image', array('class' => 'gridmag-post-thumbnail-single', 'title' => the_title_attribute('echo=0'))); ?></a>
                            <?php } ?>
                        </div>
                        <?php }
                    }
                }
            }

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'gridmag' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'gridmag' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php gridmag_after_single_page_content(); ?>

    <footer class="entry-footer">
        <?php edit_post_link( esc_html__( 'Edit', 'gridmag' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->

</div>
</article>

<?php gridmag_after_single_page(); ?>