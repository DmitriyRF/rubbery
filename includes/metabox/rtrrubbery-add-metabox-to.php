<?php


add_action( 'add_meta_boxes', 'rtrrubbery_add_metaboxes_to' );

function rtrrubbery_add_metaboxes_to() {
	
	// //Meta box for training page template only
	global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'page-templates/one-column-page.php' )
        {
            add_meta_box(
            		'one-column-page-metabox', 							// $id
            		'Page options', 									// $title
            		'rtrtubbery_display_one_column_page_metabox', 		// $callback
            		'page',												// type of WP_Screen
            		'normal', 											// $context
            		'high'												// $priority
            );

            include_once('rtrtubbery_display_one_column_page_metabox-callback.php');
        }

        if($pageTemplate == 'page-templates/two-columns-page.php' )
        {
            add_meta_box(
            		'two-column-page-metabox', 							// $id
            		'Page options', 									// $title
            		'rtrtubbery_display_two_column_page_metabox', 		// $callback
            		'page',												// type of WP_Screen
            		'normal', 											// $context
            		'high'												// $priority
            );

            include_once('rtrtubbery_display_two_column_page_metabox-callback.php');
        }

		if( $post->ID == get_option( 'page_on_front' ) ) {

		 	add_meta_box(
		 					'front-page-metabox', 						//	id
		 					__('Front page options', 'rtrrubbery'), 	//	title
		 					'rtrtubbery_display_front_page_metabox', 	//	callback
		 					'page', 									//	type of WP_Scree
		 					'normal', 									// 	$context
		 					'high'										// 	$priority
		 				);	

			include_once('rtrtubbery_display_front_page_metabox-callback.php');

		}
	}
}