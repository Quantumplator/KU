<?php
/**
 * Change login screen url
 */
function wpc_url_login(){
  return "http://studio-ku.com/";
}
add_filter('login_headerurl', 'wpc_url_login');


/**
 * Change login screen icon
 */
function login_css() {
  wp_enqueue_style( 'login_css', get_template_directory_uri() . 'style.css' );
}
add_action('login_head', 'login_css');