<?php
/**
* Plugin Name: Assessment Plugin
* Plugin URI: https://www.balogunridwan.com/
* Description: This is the plugin I created for the assessment.
* Version: 1.0
* Author: Ridwan Balogun
* Author URI: http://balogunridwan.com/
**/
function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );