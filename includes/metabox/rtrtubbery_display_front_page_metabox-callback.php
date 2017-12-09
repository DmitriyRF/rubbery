<?php

	function rtrtubbery_display_front_page_metabox($post){
		?>

		<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->"; ?>
		
		<?php  global $post; ?> 

		<?php $rtrrubbery_frontpage_meta = get_post_meta( $post->ID, 'rtrrubbery_frontpage_meta', true ); ?>

		<input type="hidden" name="rtrrubbery_meta_box_nonce" value="<?php echo wp_create_nonce( __FILE__ ); ?>">
		<div class="container-fluid height-500">
			<div class="row">
				<!-- Nav tabs -->
				<div class="col-sm-12 col-md-3 col-xl-2">
					
					<div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<a class="nav-link active" id="v-pills-slider-tab" data-toggle="pill" href="#v-pills-slider" role="tab" aria-controls="v-pills-slider" aria-selected="true">Slider</a>

						<a class="nav-link" id="v-pills-icons-tab" data-toggle="pill" href="#v-pills-icons" role="tab" aria-controls="v-pills-icons" aria-selected="false">Advantages</a>

						<a class="nav-link" id="v-pills-product-images-tab" data-toggle="pill" href="#v-pills-product-images" role="tab" aria-controls="v-pills-product-images" aria-selected="false">Product images</a>

						<a class="nav-link disabled" id="v-pills-other-tab" data-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">Other</a>

					</div>
				</div>
				<div class="col-sm-12 col-md-9 col-xl-10">
					<div class="tab-content" id="v-pills-tabContent">

						<!-- ++++++++++++++++++++ PANEL SECTION ++++++++++++++++++++ -->
						<div class="tab-pane fade show active" id="v-pills-slider" role="tabpanel" aria-labelledby="v-pills-slider-tab">
							  <h2 class="h2">Slider</h2>
							  <div class="form-check">
							    	<label class="form-check-label">
							    		<label for="">Is uses this section</label>
							      	<input class="form-check-input position-static" type="checkbox" name="rtrrubbery_frontpage_meta[slider][use]" <?php if( isset($rtrrubbery_frontpage_meta['slider']['use']) ){ checked( $rtrrubbery_frontpage_meta['slider']['use'], 'true' ); } ?> value="true">
							    	</label>
							  </div>
							  <div class="form-group">
							    	<label for="rtrrubbery-slider-shortcode">Slider shortcode </label>
							    	<textarea class="form-control" id="rtrrubbery-slider-shortcode" name="rtrrubbery_frontpage_meta[slider][shortcode]" rows="3"><?php echo isset($rtrrubbery_frontpage_meta['slider']['shortcode']) ? $rtrrubbery_frontpage_meta['slider']['shortcode'] : ''; ?></textarea>
							  </div>
						</div>

						<!-- ++++++++++++++++++++ PANEL SECTION ++++++++++++++++++++ -->
						<div class="tab-pane fade" id="v-pills-icons" role="tabpanel" aria-labelledby="v-pills-icons-tab">
							<h2 class="h2">Advantages</h2>
							<div class="form-check">
							  	<label class="form-check-label">
							  		<label for="">Is uses this section</label>
							    	<input class="form-check-input position-static" type="checkbox" name="rtrrubbery_frontpage_meta[advantage][use]" <?php if( isset($rtrrubbery_frontpage_meta['advantage']['use']) ){ checked( $rtrrubbery_frontpage_meta['advantage']['use'], 'true' ); } ?> value="true" >
							  	</label>
							</div>
							<div id="accordion" role="tablist" data-children=".item">
								<?php 

									if(  isset($rtrrubbery_frontpage_meta['advantages']) && is_array($rtrrubbery_frontpage_meta['advantages'])  ){ 

										$advantages_link_count = count( $rtrrubbery_frontpage_meta['advantages'] );

										$j = 0;  
										foreach ($rtrrubbery_frontpage_meta['advantages'] as $k => $parametrs){

											if(  isset( $parametrs) && is_array($parametrs)  ){ 

								?>
											<div class="item">
										        <a data-toggle="collapse" data-parent="#accordion" href="#advantage-set-group-<?php echo $j; ?>" aria-expanded="false" aria-controls="advantage-set-group-<?php echo $j; ?>">
										        	<h3>Block <strontg><?php echo $j; ?></strontg></h3>
										        	<button type="button" class="close" aria-label="Close">
										        	  <span aria-hidden="true">&times;</span>
										        	</button>
										        </a>
											    <div id="advantage-set-group-<?php echo $j; ?>" class="collapse" role="tabpanel" >
														<div class="form-group">
															    <label >Image icon:</label>
															    <select name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][icon]" class="form-control">
															      	<option value="0" <?php isset($parametrs['icon'] ) ? selected( $parametrs['icon'], '0') : ''; ?>>Choose</option>
															      	<option value="1" <?php isset($parametrs['icon'] ) ? selected( $parametrs['icon'], '1') : ''; ?>>Book icon</option>
															     	<option value="2" <?php isset($parametrs['icon'] ) ? selected( $parametrs['icon'], '2') : ''; ?>>Facebook icon</option>
															      	<option value="3" <?php isset($parametrs['icon'] ) ? selected( $parametrs['icon'], '3') : ''; ?>>Employment icon</option>
															      	<option value="4" <?php isset($parametrs['icon'] ) ? selected( $parametrs['icon'], '4') : ''; ?>>Mail icon</option>
															    </select>
														</div>
														<div class="form-group">
														  <label>Font Awesome icon*   <small>Icon set when field fill</small></label>
														  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][fa]" value="<?php echo isset($parametrs['fa']) ? $parametrs['fa'] : ''; ?>" placeholder="example: fa fa-book">
														</div>
														<div class="form-group">
														  <label>Header</label>
														  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][header]" value="<?php echo isset($parametrs['header']) ? $parametrs['header'] : ''; ?>" placeholder="ABOUT-US">
														</div>
														<div class="form-group">
														  <label>SubHeader</label>
														  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][subheader]" value="<?php echo isset($parametrs['subheader']) ? $parametrs['subheader'] : ''; ?>" placeholder="RTR HISTORY">
														</div>
														<div class="form-group">
														  <label>Description</label>
														  <textarea class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][desc]" rows="3"><?php echo isset($parametrs['desc']) ? $parametrs['desc'] : ''; ?></textarea>
														</div>
														<div class="form-group">
														  <label>Button</label>
														  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][button]" value="<?php echo isset($parametrs['button']) ? $parametrs['button'] : ''; ?>" placeholder="Read More">
														</div>
														<div class="form-group">
														  <label>Link</label>
														  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $j; ?>][link]" value="<?php echo isset($parametrs['link']) ? $parametrs['link'] : ''; ?>" placeholder="http://www.rtrrubber.ca/">
														</div>
											    </div>
										  	</div>
							  	<?php
							  				$j++;
							  				}
							  			}
							  		} 
							  	?>
							</div>
							<button id="add-new-advantage-more" type="button" data-id=<?php echo get_the_ID(); ?> data-nonce="<?php echo wp_create_nonce(  THEME_NAME  ); ?>" class="btn btn-success btn-sm"> Add New Block </button>
						</div>

						<!-- ++++++++++++++++++++ PANEL SECTION ++++++++++++++++++++ -->
						<div class="tab-pane fade" id="v-pills-product-images" role="tabpanel" aria-labelledby="v-pills-product-images-tab">
							<h2 class="h2">Images</h2>
							<div class="form-check">
							  	<label class="form-check-label">
							  		<label for="">Is uses this section</label>
							    	<input class="form-check-input position-static" type="checkbox" name="rtrrubbery_frontpage_meta[image][use]" <?php if( isset($rtrrubbery_frontpage_meta['image']['use']) ){ checked( $rtrrubbery_frontpage_meta['image']['use'], 'true' ); } ?> value="true" >
							  	</label>
							</div>
							<div class="form-group">
							  	<label for="rtrrubbery-image-icon-header">Header</label>
							  	<input type="text" class="form-control" id="rtrrubbery-image-icon-header" name="rtrrubbery_frontpage_meta[image][header]" value="<?php echo isset($rtrrubbery_frontpage_meta['image']['header']) ? $rtrrubbery_frontpage_meta['image']['header'] : ''; ?>" placeholder="Rubber products">
							</div>
							<div class="form-group">
							  	<label for="rtrrubbery-image-icon-subheader">SubHeader</label>
							  	<input type="text" class="form-control" id="rtrrubbery-image-icon-subheader" name="rtrrubbery_frontpage_meta[image][subheader]" value="<?php echo isset($rtrrubbery_frontpage_meta['image']['subheader']) ? $rtrrubbery_frontpage_meta['image']['subheader'] : ''; ?>" placeholder="Down prices">
							</div>
							<div id="images-block-wrapper">
								<?php 

									if(  isset($rtrrubbery_frontpage_meta['imageslinks']) && is_array($rtrrubbery_frontpage_meta['imageslinks'])  ){ 

										$images_link_count = count( $rtrrubbery_frontpage_meta['imageslinks'] );

										for ($i = 0; $i < $images_link_count; $i++) {

											$the_id =  isset( $rtrrubbery_frontpage_meta['imageslinks'][$i] ) ? $rtrrubbery_frontpage_meta['imageslinks'][$i] : '';
											$the_link =  wp_get_attachment_image_src( $the_id, 'thumbnail')[0]; 


								?>
											<div class="image-section">

												<p>
												  	<label >Image Upload</label><br>
												  	<input type="text" name="rtrrubbery_frontpage_meta[imageslinks][]" class="meta-image regular-text" value="<?php echo $the_id; ?>">
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
							<button id="add-new-gallery-image" type="button" data-id=<?php echo get_the_ID(); ?> data-nonce="<?php echo wp_create_nonce(  THEME_NAME  ); ?>" data-meta="rtrrubbery_frontpage_meta"   class="btn btn-success btn-sm"> Add New Image </button>
						</div>

						<!-- ++++++++++++++++++++ PANEL SECTION ++++++++++++++++++++ -->
						<div class="tab-pane fade" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-other-tab">
							<h2 class="h2">Other</h2>
						</div>

					</div>
				</div>
			</div>
		</div>

		<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

		<?php
	}



?>