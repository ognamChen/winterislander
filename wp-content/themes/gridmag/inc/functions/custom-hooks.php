<?php
/**
* Custom Hooks
*
* @package GridMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridmag_before_header() {
    do_action('gridmag_before_header');
}

function gridmag_after_header() {
    do_action('gridmag_after_header');
}

function gridmag_after_primary_menu() {
    do_action('gridmag_after_primary_menu');
}

function gridmag_before_main_content() {
    do_action('gridmag_before_main_content');
}
add_action('gridmag_before_main_content', 'gridmag_top_widgets', 10 );

function gridmag_after_main_content() {
    do_action('gridmag_after_main_content');
}
add_action('gridmag_after_main_content', 'gridmag_bottom_widgets', 10 );

function gridmag_sidebar_one() {
    do_action('gridmag_sidebar_one');
}
add_action('gridmag_sidebar_one', 'gridmag_sidebar_one_widgets', 10 );

function gridmag_before_single_post() {
    do_action('gridmag_before_single_post');
}

function gridmag_before_single_post_title() {
    do_action('gridmag_before_single_post_title');
}

function gridmag_after_single_post_title() {
    do_action('gridmag_after_single_post_title');
}

function gridmag_after_single_post_content() {
    do_action('gridmag_after_single_post_content');
}

function gridmag_after_single_post() {
    do_action('gridmag_after_single_post');
}

function gridmag_before_single_page() {
    do_action('gridmag_before_single_page');
}

function gridmag_before_single_page_title() {
    do_action('gridmag_before_single_page_title');
}

function gridmag_after_single_page_title() {
    do_action('gridmag_after_single_page_title');
}

function gridmag_after_single_page_content() {
    do_action('gridmag_after_single_page_content');
}

function gridmag_after_single_page() {
    do_action('gridmag_after_single_page');
}