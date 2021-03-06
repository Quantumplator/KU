<?php

/**
 * Theme setup
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget areas
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueues
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Customize Login Screen & Restrict Admin Access
 */
require get_template_directory() . '/inc/login.php';

