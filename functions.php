<?php
/**
 * RTRrubber functions and definitions
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	return;
}

define( 'THEME_DIR', trailingslashit( get_template_directory() ) );

define( 'THEME_URI', trailingslashit( get_template_directory_uri() ) );

define( 'THEME_NAME', 'Rtrrubbery' );

define( 'THEME_SLUG', 'rtrrubbery' );

define( 'THEME_VERSION', '1.0' );

define( 'THEME_OPTIONS', 'rtr_settings' );

define( 'JS_URI', THEME_URI . 'assets/js' );

define( 'CSS_URI', THEME_URI . 'assets/css' );

include( THEME_DIR . "admin/rtrrubbery-admin-enqueue-assets.php");
include( THEME_DIR . "admin/rtrrubbery-admin-ajax-hooks.php");
include( THEME_DIR . "admin/menus/dashboard-menu-tab.php");

include( THEME_DIR . "includes/rtrrubbery-create-custom-post-type.php");
include( THEME_DIR . "includes/rtrrubbery-setup.php");
include( THEME_DIR . "includes/rtrrubbery-front-enqueue-assets.php");
include( THEME_DIR . "includes/rtrrubbery-activation.php");
include( THEME_DIR . "widgets/rtrrubbery-widgets-init.php");

include( THEME_DIR . "includes/metabox/rtrrubbery-add-metabox-to.php");
include( THEME_DIR . "includes/metabox/rtrrubbery-metabox-save.php");

include( THEME_DIR . "includes/tgmpa/class-tgm-plugin-activation.php");
include( THEME_DIR . "includes/tgmpa/rtrrubbery-plugin-required.php");


/**
 * Handles JavaScript detection.
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 */
function rtrrubbery_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'rtrrubbery_javascript_detection', 0 );


add_filter( 'pre_option_link_manager_enabled', '__return_true' );
/**
 * Implement the Custom Header feature.
 */
//require get_parent_theme_file_path( '/inc/custom-header.php' );