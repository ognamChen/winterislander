<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#gridmag-content-wrapper -->
</div><!--/#gridmag-wrapper -->
</div>

<div class="gridmag-outer-wrapper">
<?php gridmag_bottom_wide_widgets(); ?>
</div>

<?php if ( !(gridmag_get_option('hide_footer_social_buttons')) ) { ?>
<div class="gridmag-outer-wrapper">
<div class="gridmag-bottom-social-bar">
<?php gridmag_footer_social_buttons(); ?>
</div>
</div>
<?php } ?>

<?php if ( !(gridmag_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'gridmag-footer-1' ) || is_active_sidebar( 'gridmag-footer-2' ) || is_active_sidebar( 'gridmag-footer-3' ) || is_active_sidebar( 'gridmag-footer-4' ) || is_active_sidebar( 'gridmag-footer-5' ) || is_active_sidebar( 'gridmag-top-footer' ) || is_active_sidebar( 'gridmag-bottom-footer' ) ) : ?>
<div class="gridmag-outer-wrapper">
<div class='clearfix' id='gridmag-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='gridmag-container clearfix'>

<?php if ( is_active_sidebar( 'gridmag-top-footer' ) ) : ?>
<div class='clearfix'>
<div class='gridmag-top-footer-block'>
<?php dynamic_sidebar( 'gridmag-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridmag-footer-1' ) || is_active_sidebar( 'gridmag-footer-2' ) || is_active_sidebar( 'gridmag-footer-3' ) || is_active_sidebar( 'gridmag-footer-4' ) || is_active_sidebar( 'gridmag-footer-5' ) ) : ?>
<div class='gridmag-footer-block-cols clearfix'>

<div class="gridmag-footer-block-col gridmag-footer-5-col" id="gridmag-footer-block-1">
<?php dynamic_sidebar( 'gridmag-footer-1' ); ?>
</div>

<div class="gridmag-footer-block-col gridmag-footer-5-col" id="gridmag-footer-block-2">
<?php dynamic_sidebar( 'gridmag-footer-2' ); ?>
</div>

<div class="gridmag-footer-block-col gridmag-footer-5-col" id="gridmag-footer-block-3">
<?php dynamic_sidebar( 'gridmag-footer-3' ); ?>
</div>

<div class="gridmag-footer-block-col gridmag-footer-5-col" id="gridmag-footer-block-4">
<?php dynamic_sidebar( 'gridmag-footer-4' ); ?>
</div>

<div class="gridmag-footer-block-col gridmag-footer-5-col" id="gridmag-footer-block-5">
<?php dynamic_sidebar( 'gridmag-footer-5' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridmag-bottom-footer' ) ) : ?>
<div class='clearfix'>
<div class='gridmag-bottom-footer-block'>
<?php dynamic_sidebar( 'gridmag-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div><!--/#gridmag-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>


<div class="gridmag-outer-wrapper">
<div class='gridmag-footer clearfix' id='gridmag-footer'>
<div class='gridmag-foot-wrap gridmag-container'>
<?php if ( gridmag_get_option('footer_text') ) : ?>
  <p class='gridmag-copyright'><?php echo esc_html(gridmag_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='gridmag-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'gridmag' ), esc_html(date_i18n(__('Y','gridmag'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='gridmag-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'gridmag' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#gridmag-footer -->
</div>

<button class="gridmag-scroll-top" aria-label="<?php esc_attr_e( 'Scroll to Top', 'gridmag' ); ?>" title="<?php esc_attr_e('Scroll to Top','gridmag'); ?>"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

<?php wp_footer(); ?>
</body>
</html>