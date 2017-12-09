<?php
/**
 * Template Name: One Column Page
 Template Post Type: page
 */
?>
<?php get_header();  ?>
<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->"; ?>
<?php $rtrrubbery_one_column_meta = get_post_meta( get_the_ID(), 'rtrrubbery_one_column_meta', true ); ?>


<div class="site-content-contain">
	<div id="content" class="site-content">
		<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php if(have_posts()) : ?>

						     <?php while(have_posts())  : the_post(); ?>

						     <h1 class="color-first-word"><?php the_title(); ?></h1>

						     <?php the_content(); ?>

						     <?php //comments_template( '', true ); ?> 

						    <?php endwhile; ?> 

						<?php else : ?>

						        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

						<?php endif; ?>  
					</div>
					<?php if(  isset($rtrrubbery_one_column_meta['image']['use']) && ($rtrrubbery_one_column_meta['image']['use'] == 'true')  ){   ?>
						<section class="gallery">
									<div class="ImageGrid">
										<?php 

											if(  isset($rtrrubbery_one_column_meta['imageslinks']) && is_array($rtrrubbery_one_column_meta['imageslinks'])  ){ 

												$images_count = count( $rtrrubbery_one_column_meta['imageslinks'] ); 

												for ($i = 0; $i < $images_count; $i++) {

													$the_link =  isset( $rtrrubbery_one_column_meta['imageslinks'][$i] ) ? $rtrrubbery_one_column_meta['imageslinks'][$i] : '';
													
													?>			

														<a data-fancybox="gallery" data-type="image" href="<?php echo wp_get_attachment_image_src( $the_link, 'large' )[0];?>" >
															<img src="<?php echo wp_get_attachment_image_src( $the_link, 'thumbnail')[0]; ?>" alt="">
														</a>
													
													<?php
												}
											} 
										?>
									</div>
						</section>
					 <?php  } ?>
				</div>
			</div>
		</div><!-- .wrap -->
	</div><!-- #content -->
</div><!-- .site-content-contain -->

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>
<?php get_footer(); ?>
<?php  ?>