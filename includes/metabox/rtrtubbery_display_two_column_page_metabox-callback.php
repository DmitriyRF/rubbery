
<?php

	function rtrtubbery_display_two_column_page_metabox($post){
		?>

		<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->"; ?>
		
		<?php  global $post; ?> 

		<?php $rtrrubbery_two_column_meta = get_post_meta( $post->ID, 'rtrrubbery_two_column_meta', true ); ?>

		<input type="hidden" name="rtrrubbery_meta_box_nonce" value="<?php echo wp_create_nonce( __FILE__ ); ?>">
		<div class="container-fluid height-500">
			<div class="row">
				<div class="col-12">
					<h2 class="h2">Images</h2>
					<div class="form-check">
					  	<label class="form-check-label">
					  		<label for="">Is Showing these images?</label>
					    	<input class="form-check-input position-static" type="checkbox" name="rtrrubbery_two_column_meta[image][use]" <?php if( isset($rtrrubbery_two_column_meta['image']['use']) ){ checked( $rtrrubbery_two_column_meta['image']['use'], 'true' ); } ?> value="true" >
					  	</label>
					</div>
					<div id="images-block-wrapper">
						<?php 

							if(  isset($rtrrubbery_two_column_meta['imageslinks']) && is_array($rtrrubbery_two_column_meta['imageslinks'])  ){ 

								$images_link_count = count( $rtrrubbery_two_column_meta['imageslinks'] );

								for ($i = 0; $i < $images_link_count; $i++) {

									$the_id =  isset( $rtrrubbery_two_column_meta['imageslinks'][$i] ) ? $rtrrubbery_two_column_meta['imageslinks'][$i] : '';
									$the_link =  wp_get_attachment_image_src( $the_id, 'thumbnail')[0]; 


						?>
									<div class="image-section">

										<p>
										  	<label >Image Upload</label><br>
										  	<input type="text" name="rtrrubbery_two_column_meta[imageslinks][]" class="meta-image regular-text" value="<?php echo $the_id; ?>">
											<input type="button" class="button image-upload" value="Browse">					
											<span class="remove-gallery-image" aria-label="Close">
										     		<span aria-hidden="true">&times; Remove</span>
										     </span>
										</p>

										<div class="image-preview">
											<img src="<?php echo $the_link; ?>" style="max-width: 250px;">
										</div>

									</div>
						<?php
								}
							} 
						?>
					</div>
					<button id="add-new-gallery-image" type="button" data-id=<?php echo get_the_ID(); ?> data-nonce="<?php echo wp_create_nonce(  THEME_NAME  ); ?>" data-meta="rtrrubbery_two_column_meta" class="btn btn-success btn-sm"> Add New Image </button>
				</div>
			</div>
		</div>

		<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

		<?php
	}

?>