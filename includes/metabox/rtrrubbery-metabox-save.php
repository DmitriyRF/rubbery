<?php

/**
 * Save meta box in template page
 * @param type $post_id 
 * @return type
 */


add_action( 'save_post', 'rtrrubbery_meta_box_save' );

function rtrrubbery_meta_box_save( $post_id ) { 

	// // check permissions
	// if ( 'page' === $_POST['post_type'] ) {

	// 	if ( !current_user_can( 'edit_page', $post_id ) ) {
	// 		return $post_id;
	// 	} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
	// 		return $post_id;
	// 	}  
	// }

	// if ( !wp_verify_nonce( $_POST['rtrrubbery_meta_box_nonce'], __FILE__ ) ) {
	// 	return $post_id; 
	// }

	// // check autosave
	// 	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
	// 		return $post_id;
	// }

    $pageTemplate = get_post_meta($post_id, '_wp_page_template', true);

    if($pageTemplate == 'page-templates/one-column-page.php' )
    {
    	
	    	$old = get_post_meta( $post_id, 'rtrrubbery_one_column_meta', true );
	    	$new = $_POST['rtrrubbery_one_column_meta'];

	    	if ( $new && $new !== $old ) {
	    		update_post_meta( $post_id, 'rtrrubbery_one_column_meta', $new );
	    	} elseif ( '' === $new && $old ) {
	    		delete_post_meta( $post_id, 'rtrrubbery_one_column_meta', $old );
	    	}
    }

    if($pageTemplate == 'page-templates/two-columns-page.php' )
    {
    	
	    	$old = get_post_meta( $post_id, 'rtrrubbery_two_column_meta', true );
	    	$new = $_POST['rtrrubbery_two_column_meta'];

	    	if ( $new && $new !== $old ) {
	    		update_post_meta( $post_id, 'rtrrubbery_two_column_meta', $new );
	    	} elseif ( '' === $new && $old ) {
	    		delete_post_meta( $post_id, 'rtrrubbery_two_column_meta', $old );
	    	}
    }

	
	if( $post_id == get_option( 'page_on_front' ) ) {

			
			$old = get_post_meta( $post_id, 'rtrrubbery_frontpage_meta', true );
			$new = $_POST['rtrrubbery_frontpage_meta'];

			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'rtrrubbery_frontpage_meta', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'rtrrubbery_frontpage_meta', $old );
			}

	}

}