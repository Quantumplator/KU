<?php
/**
 * Change login screen url
 */
function _ku_url_login(){
  return site_url();
}
add_filter('login_headerurl', '_ku_url_login');


/**
 * Change login screen css
 */
// function _ku_login_css() {
//   wp_enqueue_style( 'login_css', get_template_directory_uri() . '/style.css' );
// }
// add_action('login_head', '_ku_login_css');


/**
 * Completely remove defaukt login steez and replace with full stylesheet for consistency
 */
if ( basename($_SERVER['PHP_SELF']) == 'wp-login.php' )
  add_action( 'style_loader_tag', create_function( '$a', "return null;" ) );

function _ku_login_css() { ?>
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/style.css'; ?>" type="text/css" media="all" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sigmar+One|Orbitron:400,900,700,500|Permanent+Marker|Open+Sans:400,700' type='text/css' media="all">
<?php }
add_action( 'login_enqueue_scripts', '_ku_login_css' );


/**
* Restrict admin access to admins only.
*/
function _ku_restrict_admin()
{
  if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
    wp_redirect( site_url() );
  }
}
add_action( 'admin_init', '_ku_restrict_admin', 1 );