<?php

	add_action('admin_post_rtrrubbery_edit_slider', 'rtrrubbery_edit_the_slider');

	function rtrrubbery_edit_the_slider(){

			if( ! current_user_can( 'edit_theme_options' ) ){
				wp_die("You are not allowed to be on this page!");
			}
			check_admin_referer('rtrrubbery_edit_slider_verify');

			wpdb_update_slider(		$_POST['ID'],
									sanitize_text_field(		$_POST['input_slider_name']	), 
									sanitize_textarea_field(	$_POST['textarea_slider_description']  ), 
									sanitize_text_field(		$_POST['image_slider'] 	), 
									sanitize_text_field(		$_POST['input_label']	), 
									(	$_POST['input_link']	)
							);




			// wp_redirect( admin_url( 'admin.php?page=rtrrubbery_theme_sliders_page&status=added_new_slider' ) );
			wp_redirect( admin_url( 'admin.php?page=rtrrubbery_theme_options_page&status=editted_the_slider' ) );

	}

