<?php

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version', 5 );
add_action( 'wp_enqueue_scripts', 'rtrrubbery_scripts' );


function replace_core_jquery_version() {

    wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.0.0.js", array(), '3.0.0' );
    wp_register_script( 'jquery',  JS_URI.'/jquery-3.2.1.min.js', array(), '3.2.1' );

    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', JS_URI.'/jquery-migrate-3.0.0.min.js', array(), '3.0.0' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-migrate' );

}

function rtrrubbery_scripts() {

	wp_enqueue_style( 'bootstrap-4-b', CSS_URI.'/bootstrap.css', array(), '', "all"  );

	wp_enqueue_style( 'font-awesome', CSS_URI.'/font-awesome.min.css', array(), '', "all"  );

	wp_enqueue_style( 'animatecss', CSS_URI.'/animate.css', array(), '', "all"  );
	
	wp_enqueue_style( 'fancybox', CSS_URI.'/jquery.fancybox.css', array(), '', "all"  );
	// Theme stylesheet.
	wp_enqueue_style( 'rtrrubbery-style', get_stylesheet_uri() );


	

	wp_enqueue_script( 'jquery-scrollto', JS_URI.'/jquery.scrollTo.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'jquery-parallax', JS_URI.'/parallax.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'jquery-fancybox', JS_URI.'/jquery.fancybox.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'jquery-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery' ), '1.12.3', true );

	wp_enqueue_script( 'bootstrap-4-b', JS_URI.'/bootstrap.js', array( 'jquery', 'jquery-popper' ), false, true );

	wp_enqueue_script( 'rtrrubbery-global', JS_URI.'/global-front.js', array( 'jquery', 'bootstrap-4-b' ), false, true );

	// if( is_page_template('page-templates/...php') ){}

}