<?php
/**
* Template part for displaying a message that posts cannot be found.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<section class="gridmag-no-results gridmag-not-found">
    <header class="gridmag-page-header">
    <div class="gridmag-page-header-inside">
        <h1 class="gridmag-page-title"><?php esc_html_e( 'Nothing Found', 'gridmag' ); ?></h1>
    </div>
    </header><!-- .gridmag-page-header -->

    <div class="page-content">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                    <p><?php
                        printf(
                            wp_kses(
                                /* translators: 1: link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gridmag' ),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ),
                            esc_url( admin_url( 'post-new.php' ) )
                        );
                    ?></p>

            <?php elseif ( is_search() ) : ?>

                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridmag' ); ?></p>

                    <?php get_search_form(); ?>

            <?php else : ?>

                    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gridmag' ); ?></p>
                    <?php get_search_form(); ?>

            <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .gridmag-no-results -->