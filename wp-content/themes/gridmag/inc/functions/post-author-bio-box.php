<?php
/**
* Author bio box
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Author bio box
function gridmag_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="gridmag-author-bio">
            <div class="gridmag-author-bio-top">
            <div class="gridmag-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="gridmag-author-bio-text">
                <h2>'.esc_html__( 'Author: ', 'gridmag' ).'<span>'. get_the_author_link() .'</span></h2><div class="gridmag-author-bio-text-description">'. get_the_author_meta('description',get_query_var('author') ) .'</div>
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}