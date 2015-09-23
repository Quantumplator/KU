<?php
/**
 * Change login screen url
 */
function _ku_url_login(){
  return site_url();
}
add_filter('login_headerurl', '_ku_url_login');


/**
 * Change login screen icon
 */
function _ku_login_css() {
  wp_enqueue_style( 'login_css', get_template_directory_uri() . '/style.css' );
}
add_action('login_head', '_ku_login_css');