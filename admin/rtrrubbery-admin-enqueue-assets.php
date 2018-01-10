<?php

/**
 * Add scripts to admin panel
 * @param type function 
 * @return none
 */

add_action( 'admin_enqueue_scripts', 'rtrrubbery_ajax_enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'rtrrubbery_scripts_admin', 15 );

function rtrrubbery_scripts_admin(  $hook ) {

	wp_enqueue_style( 'bootstrap-4-b', CSS_URI.'/bootstrap.css', array(), '', "all"  );

	wp_enqueue_style( 'fancybox', CSS_URI.'/style-admin.css', array('bootstrap-4-b'), '', "all"  );


	// wp_deregister_script( 'jquery' );
	// wp_register_script( 'jquery',  JS_URI.'/jquery-3.2.1.min.js', array(), '3.2.1' );

	// wp_deregister_script( 'jquery-migrate' );
	// wp_register_script( 'jquery-migrate', JS_URI.'/jquery-migrate-3.0.0.min.js', array( 'jquery' ), '3.0.0' );

	// wp_deregister_script( 'jquery-ui-core' );
	// wp_register_script( 'jquery',  JS_URI.'/ jquery-ui/jquery-ui.min.js', array( 'jquery' ), '1.12.1' );


	wp_enqueue_script( 'jquery' );   

	wp_enqueue_script( 'jquery-migrate' );

	wp_enqueue_script( 'media-upload');

	wp_enqueue_script( 'thickbox');

	wp_enqueue_style( 'thickbox');

	wp_enqueue_media();



	if( isset($_GET['page']) &&	($_GET['page'] == 'rtrrubbery_theme_edit_slider_page' || $_GET['page'] == 'rtrrubbery_theme_add_slider_page') ){

			
			wp_enqueue_script( 'rtrrubbery-settings', JS_URI . '/settings-admin.js', array( 'jquery' ), null, true );

	}


		if ( 'edit.php' != $hook  && 'post.php' != $hook) {
		       return;
		}

		    wp_enqueue_script( 'jquery-windows', JS_URI.'/4windows.js', array( 'jquery' ), false, true );

			wp_enqueue_script( 'jquery-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery' ), '1.12.3', true );

			wp_enqueue_script( 'bootstrap-4-b', JS_URI.'/bootstrap.js', array( 'jquery', 'jquery-popper' ), false, true );
		
        	wp_enqueue_script( 'rtrrubbery-global', JS_URI . '/global-admin.js', array( 'jquery', 'bootstrap-4-b' ), null, true );

}

function rtrrubbery_ajax_enqueue_scripts( $hook ) {

		if ( 'edit.php' != $hook  && 'post.php' != $hook) {
		       return;
		}

		wp_enqueue_script( 'admin-ajax-script', JS_URI . '/admion-ajax.js', array('jquery'), '1.0', true );

		wp_localize_script( 'admin-ajax-script', 'exteenal_html',

					array(
										'ajax_url' => admin_url( 'admin-ajax.php' )
					)
		);

}