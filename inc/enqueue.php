<?php
/**
 * Enqueue scripts and styles.
 */
function _ku_scripts() {
  wp_enqueue_style( '_ku-style', get_stylesheet_uri() );

  wp_enqueue_style( '_ku-fonts', 'https://fonts.googleapis.com/css?family=Philosopher:700|Open+Sans:400,700,800' );

  wp_enqueue_script( '_ku-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '20150924', true );

  wp_enqueue_script( '_ku-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

  wp_enqueue_script( '_ku-main-min', get_template_directory_uri() . '/js/main.min.js', array(), '20150924', true );

  wp_enqueue_script( '_ku-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', '_ku_scripts' );