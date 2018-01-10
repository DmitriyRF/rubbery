<?php

	function rtrrubbery_theme_add_slider_function(){
		
		if ( ! current_user_can( 'edit_theme_options' ) ) {

			wp_die(
				'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
				'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
				403
			);

		}

		$title 												= __( 'Add New Slider' );
		?>

			<div class="wrap add-sleder-form">
				<h1><?php echo esc_html( $title ); ?></h1>
				<form method="post" action="admin-post.php">
					<input type="hidden" name="action" value="rtrrubbery_add_slider">
					<?php wp_nonce_field('rtrrubbery_add_slider_verify');?>

					<h2 class="title"> <?php _e('Create a new slider and add them to this site.', 'rtrrubbery');?> </h2>

					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="input_slider_name"  ><?php _e('Slider Name') ?></label>
							</th>
							<td>
								<input id="input_slider_name"  size="50" name="input_slider_name" type="text"></input>
							</td>					

						</tr>
						<tr>
							<th scope="row">
								<label for="textarea_slider_description"  ><?php _e('Description for slider', 'rtrrubbery');?></label>
							</th>
							<td>
								<textarea id="textarea_slider_description" class="large-text code" name="textarea_slider_description" rows="10" cols="50"></textarea>
							</td>
						</tr>					
						<tr>
							<th scope="row">
								<label  ><?php _e('Images for slider', 'rtrrubbery');?></label>
							</th>
							<td>
								<div class="input-group">

									<span class="input-group-btn">

										<button id="button_image_for_slider" class="input-group-button" type="button"><?php _e('Upload image', 'rtrrubbery'); ?></button>
									</span>

									<input id="image_slider" class="input-group-text" size="50" name="image_slider" type="text">

								</div>
								<div class="image-preview">
									<img id="image-preview-attachment" src="" style="max-width: 250px;">
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label  ><?php _e('Button', 'rtrrubbery');?></label>
							</th>
							<td>
								<table class="form-table">
									<tr>
										<th>
											<label for="input_label"  ><?php _e('Label', 'rtrrubbery');?></label>
										</th>
										<td>
											<input id="input_label"  size="50" name="input_label" type="text">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_link"  ><?php _e('Link', 'rtrrubbery');?></label>
										</th>
										<td>
											<input id="input_link"  size="50" name="input_link" type="text">
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>

					<?php do_settings_sections( 'rtrrubbery_theme_options' ); ?>

					<?php submit_button(); ?>
				</form>
			</div>

		<?php
	}