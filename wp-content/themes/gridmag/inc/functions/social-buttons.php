<?php
/**
* Social buttons
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_header_social_buttons() { ?>

<div class="gridmag-top-social-icons clearfix">
    <?php if ( gridmag_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('twitterlink') ); ?>" target="_blank" class="gridmag-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button','gridmag'); ?>"><i class="fa fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('facebooklink') ); ?>" target="_blank" class="gridmag-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','gridmag'); ?>"><i class="fa fa-facebook" aria-hidden="true" title="<?php esc_attr_e('Facebook','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('pinterestlink') ); ?>" target="_blank" class="gridmag-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','gridmag'); ?>"><i class="fa fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('linkedinlink') ); ?>" target="_blank" class="gridmag-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','gridmag'); ?>"><i class="fa fa-linkedin" aria-hidden="true" title="<?php esc_attr_e('Linkedin','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('instagramlink') ); ?>" target="_blank" class="gridmag-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','gridmag'); ?>"><i class="fa fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('youtubelink') ); ?>" target="_blank" class="gridmag-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','gridmag'); ?>"><i class="fa fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( !(gridmag_get_option('hide_login_button')) ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" class="gridmag-social-icon-login" aria-label="<?php esc_attr_e( 'Logout Button', 'gridmag' ); ?>"><i class="fa fa-sign-out" aria-hidden="true" title="<?php esc_attr_e( 'Logout Button', 'gridmag' ); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="gridmag-social-icon-login" aria-label="<?php esc_attr_e( 'Login / Register', 'gridmag' ); ?>"><i class="fa fa-sign-in" aria-hidden="true" title="<?php esc_attr_e( 'Login / Register Button', 'gridmag' ); ?>"></i></a><?php endif;?><?php } ?>
    <?php if ( !(gridmag_get_option('hide_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" class="gridmag-social-icon-search" aria-label="<?php esc_attr_e('Search Button','gridmag'); ?>"><i class="fa fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','gridmag'); ?>"></i></a><?php } ?>
</div>

<?php }

function gridmag_footer_social_buttons() { ?>

<div class="gridmag-bottom-social-icons clearfix">
    <?php if ( gridmag_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('twitterlink') ); ?>" target="_blank" class="gridmag-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button','gridmag'); ?>"><i class="fa fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('facebooklink') ); ?>" target="_blank" class="gridmag-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','gridmag'); ?>"><i class="fa fa-facebook" aria-hidden="true" title="<?php esc_attr_e('Facebook','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('googlelink') ); ?>" target="_blank" class="gridmag-social-icon-google-plus" aria-label="<?php esc_attr_e('Google Plus Button','gridmag'); ?>"><i class="fa fa-google-plus" aria-hidden="true" title="<?php esc_attr_e('Google Plus','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('pinterestlink') ); ?>" target="_blank" class="gridmag-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','gridmag'); ?>"><i class="fa fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('linkedinlink') ); ?>" target="_blank" class="gridmag-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','gridmag'); ?>"><i class="fa fa-linkedin" aria-hidden="true" title="<?php esc_attr_e('Linkedin','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('instagramlink') ); ?>" target="_blank" class="gridmag-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','gridmag'); ?>"><i class="fa fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('flickrlink') ); ?>" target="_blank" class="gridmag-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','gridmag'); ?>"><i class="fa fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('youtubelink') ); ?>" target="_blank" class="gridmag-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','gridmag'); ?>"><i class="fa fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('vimeolink') ); ?>" target="_blank" class="gridmag-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','gridmag'); ?>"><i class="fa fa-vimeo" aria-hidden="true" title="<?php esc_attr_e('Vimeo','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('soundcloudlink') ); ?>" target="_blank" class="gridmag-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','gridmag'); ?>"><i class="fa fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('lastfmlink') ); ?>" target="_blank" class="gridmag-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','gridmag'); ?>"><i class="fa fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('githublink') ); ?>" target="_blank" class="gridmag-social-icon-github" aria-label="<?php esc_attr_e('Github Button','gridmag'); ?>"><i class="fa fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('bitbucketlink') ); ?>" target="_blank" class="gridmag-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','gridmag'); ?>"><i class="fa fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('tumblrlink') ); ?>" target="_blank" class="gridmag-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','gridmag'); ?>"><i class="fa fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('digglink') ); ?>" target="_blank" class="gridmag-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','gridmag'); ?>"><i class="fa fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('deliciouslink') ); ?>" target="_blank" class="gridmag-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','gridmag'); ?>"><i class="fa fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('stumblelink') ); ?>" target="_blank" class="gridmag-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','gridmag'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('redditlink') ); ?>" target="_blank" class="gridmag-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','gridmag'); ?>"><i class="fa fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('dribbblelink') ); ?>" target="_blank" class="gridmag-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','gridmag'); ?>"><i class="fa fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('behancelink') ); ?>" target="_blank" class="gridmag-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','gridmag'); ?>"><i class="fa fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('vklink') ); ?>" target="_blank" class="gridmag-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','gridmag'); ?>"><i class="fa fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('codepenlink') ); ?>" target="_blank" class="gridmag-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','gridmag'); ?>"><i class="fa fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('jsfiddlelink') ); ?>" target="_blank" class="gridmag-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','gridmag'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('stackoverflowlink') ); ?>" target="_blank" class="gridmag-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','gridmag'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('stackexchangelink') ); ?>" target="_blank" class="gridmag-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','gridmag'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('bsalink') ); ?>" target="_blank" class="gridmag-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','gridmag'); ?>"><i class="fa fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('slidesharelink') ); ?>" target="_blank" class="gridmag-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','gridmag'); ?>"><i class="fa fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( gridmag_get_option('skypeusername') ); ?>?chat" class="gridmag-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','gridmag'); ?>"><i class="fa fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( gridmag_get_option('emailaddress') ); ?>" class="gridmag-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','gridmag'); ?>"><i class="fa fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('telephonenumber') ) : ?>
            <a href="tel:<?php echo esc_html( gridmag_get_option('telephonenumber') ); ?>" class="gridmag-social-icon-phone" aria-label="<?php esc_attr_e('Phone Button','gridmag'); ?>"><i class="fa fa-phone" aria-hidden="true" title="<?php esc_attr_e('Phone','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( gridmag_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( gridmag_get_option('rsslink') ); ?>" target="_blank" class="gridmag-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','gridmag'); ?>"><i class="fa fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','gridmag'); ?>"></i></a><?php endif; ?>
    <?php if ( !(gridmag_get_option('hide_login_button')) ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" class="gridmag-social-icon-login" aria-label="<?php esc_attr_e( 'Logout Button', 'gridmag' ); ?>"><i class="fa fa-sign-out" aria-hidden="true" title="<?php esc_attr_e( 'Logout', 'gridmag' ); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="gridmag-social-icon-login" aria-label="<?php esc_attr_e( 'Login / Register Button', 'gridmag' ); ?>"><i class="fa fa-sign-in" aria-hidden="true" title="<?php esc_attr_e( 'Login / Register', 'gridmag' ); ?>"></i></a><?php endif;?><?php } ?>
    <?php if ( !(gridmag_get_option('hide_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" class="gridmag-social-icon-search" aria-label="<?php esc_attr_e('Search Button','gridmag'); ?>"><i class="fa fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','gridmag'); ?>"></i></a><?php } ?>
</div>

<?php }