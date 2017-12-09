


		

	<?php if(  isset($rtrrubbery_pass_post_meta['image']['use']) && ($rtrrubbery_pass_post_meta['image']['use'] == 'true')  ){   ?>
		<section class="gallery-wrap">
			<div class="container">
				<div class="row no-gutters heaer-font-bg">
					<div class="ImageGrid">
						<?php 

							if(  isset($rtrrubbery_pass_post_meta['imageslinks']) && is_array($rtrrubbery_pass_post_meta['imageslinks'])  ){ 

								$images_count = count( $rtrrubbery_pass_post_meta['imageslinks'] ); 

								for ($i = 0; $i < $images_count; $i++) {

									$the_link =  isset( $rtrrubbery_pass_post_meta['imageslinks'][$i] ) ? $rtrrubbery_pass_post_meta['imageslinks'][$i] : '';
									
									?>			

										<a data-fancybox="gallery" data-type="image" href="<?php echo wp_get_attachment_image_src( $the_link, 'large' )[0];?>" >
											<img src="<?php echo wp_get_attachment_image_src( $the_link, 'thumbnail')[0]; ?>" alt="">
										</a>
									
									<?php
								}
							} 
						?>
					</div>
				</div>
			</div>
		</section>
	 <?php  } ?>