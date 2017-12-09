<?php


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
add_action( 'after_setup_theme', 'rtrrubber_setup' );

function rtrrubber_setup() {

	load_theme_textdomain( 'rtrrubber' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'rtrrubber-featured-image', 2000, 1200, true );

	add_image_size( 'rtrrubber-thumbnail-avatar', 100, 100, true );

	add_image_size( 'rtrrubber-thumbnail-gallery', 180, 150, true );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top-left'    => __( 'Top Menu Left', 'rtrrubber' ),
		'top-right'    => __( 'Top Menu Right', 'rtrrubber' ),
		'top-mobile'    => __( 'Top Menu Mobile', 'rtrrubber' ),
		'social' => __( 'Social Links Menu', 'rtrrubber' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
			'height'      => 153,
			'width'       => 145,
			'flex-height' => true,
			'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	
}