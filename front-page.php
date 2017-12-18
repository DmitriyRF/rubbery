<?php
/**
 * The main template file RTRrubber theme
 */

get_header(); ?>

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->" ?>

<?php $rtrrubbery_frontpage_meta = get_post_meta( get_the_ID(), 'rtrrubbery_frontpage_meta', true ); ?>

<div class="site-content-contain">
	<div id="content" class="site-content">

		<?php if(  isset($rtrrubbery_frontpage_meta['slider']['use']) && ($rtrrubbery_frontpage_meta['slider']['use'] == 'true')  ){?>

		<section class="slider-wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php 
							if( isset($rtrrubbery_frontpage_meta['slider']['shortcode']) &&  $rtrrubbery_frontpage_meta['slider']['shortcode'] != ''  ){
									echo do_shortcode($rtrrubbery_frontpage_meta['slider']['shortcode']);
							}
						?>
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<div class="row">
						    		<div class="col-12 col-lg-6">
											<div class="sprocket-features-content">
												<h2 class="sprocket-features-title">
													<a href="http://www.rtrrubber.ca/ecorubber/all-mats.html" style="visibility: visible;"><span>GYM</span> &amp; HOCKEY MATS</a>
												</h2>
												<div class="sprocket-features-desc">
													<span class="desc-text">Made entirely from tires collected from right here in Manitoba. Our rubber mats are made to last and are an economical alternative to costly options found elsewhere!</span>
													<p>
														<a href="http://www.rtrrubber.ca/ecorubber/all-mats.html" class="readon"><span>Read More</span></a>
													</p>
												</div>
											</div>
						    		</div>
						    		<div class="col-12 col-lg-6">						      
						    			<img class="" src=<?php echo THEME_URI . "assets/images/slide.png"; ?> alt="First slide">
						    		</div>
						    	</div>

						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-image" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-image" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

					</div>
				</div>
			</div>
		</section>

		<?php } ?>
		
		<?php if(  isset($rtrrubbery_frontpage_meta['advantage']['use']) && ($rtrrubbery_frontpage_meta['advantage']['use'] == 'true')  ){?>

		<section class="icon-wrap">
			<div class="container">
				<div class="row">
					
					<?php 

						if(  isset($rtrrubbery_frontpage_meta['advantages']) && is_array($rtrrubbery_frontpage_meta['advantages'])  ){ 

							$advantages_count = count( $rtrrubbery_frontpage_meta['advantages'] );

							foreach ($rtrrubbery_frontpage_meta['advantages'] as  $parametrs){

								if(  isset( $parametrs) && is_array($parametrs) ){ 

									if( isset($parametrs['fa']) && $parametrs['fa'] != '' ){
										$icon_class = $parametrs['fa']; 
									}else{
										if( isset($parametrs['icon']) ){

											switch ( $parametrs['icon'] ) {
													case '0':
														$icon_class = "icon-no";
														break;
													case '1':
														$icon_class = "icon-book";
														break;
													case '2':
														$icon_class = "icon-facebook";
														break;
													case '3':
														$icon_class = "icon-employment";
														break;
													case '4':
														$icon_class = "icon-mail";
														break;
													default:
														$icon_class = "icon-no";
														break;
												} 
										}
									}

							?>
								<div class="col-12 col-md-6 col-lg-3">
									<div class="module-surround">
										<div class="module-title">
											<div class="module-icon <?php echo $icon_class; ?>"></div>
											<?php if(  isset($parametrs['header'])  ){?>
											<h2 class="title"><span><?php echo $parametrs['header']; ?></span><?php echo isset($parametrs['subheader']) ? $parametrs['subheader'] : ''; ?></h2>
											<?php }?>
										</div>
								        <div class="module-content">			               	
											<div class="customtitle5 icon1 nomargintop nomarginbottom">
												<div class="rt-center">
													<p class="nopaddingtop"><?php echo isset($parametrs['desc']) ? $parametrs['desc'] : ''; ?></p>
													<a class="readon" href="<?php echo isset($parametrs['link']) ? $parametrs['link'] : 'http://www.rtrrubber.ca/#'; ?>"><span><?php echo isset($parametrs['button']) ? $parametrs['button'] : 'Learn More'; ?></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
				  				<?php
				  				}
				  			}
				  		} 
				  	?>


				</div>
			</div>
		</section>

		<?php } ?>

		<?php if(  isset($rtrrubbery_frontpage_meta['image']['use']) && ($rtrrubbery_frontpage_meta['image']['use'] == 'true')  ){?>
		<section class="gallery-wrap">
			<div class="container">
				<div class="row no-gutters heaer-font-bg">
					<div class="col-12 ">
						<h2 class="paneltitle"><?php echo isset($rtrrubbery_frontpage_meta['image']['header']) ? $rtrrubbery_frontpage_meta['image']['header'] : ''; ?></h2>
						<h3 class="panelsubtitle"><?php echo isset($rtrrubbery_frontpage_meta['image']['subheader']) ? $rtrrubbery_frontpage_meta['image']['subheader'] : ''; ?></h3>
					</div>
					<div class="ImageGrid">

								<?php 

									if(  isset($rtrrubbery_frontpage_meta['imageslinks']) && is_array($rtrrubbery_frontpage_meta['imageslinks'])  ){ 

										$images_count = count( $rtrrubbery_frontpage_meta['imageslinks'] ); 

										for ($i = 0; $i < $images_count; $i++) {

											$the_link =  isset( $rtrrubbery_frontpage_meta['imageslinks'][$i] ) ? $rtrrubbery_frontpage_meta['imageslinks'][$i] : '';

											$image_array_large = wp_get_attachment_image_src( $the_link, 'large' );
											$image_array_thumbnail = wp_get_attachment_image_src( $the_link, 'thumbnail' );
											
											?>			

												<a data-fancybox="gallery" data-type="image" href="<?php  echo $image_array_large[0];  ?>" >
													<img src="<?php  echo $image_array_thumbnail[0];  ?>" alt="">
												</a>
											
											<?php
										}
									} 
								?>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
	</div><!-- #content -->
</div><!-- .site-content-contain -->

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

<?php get_footer();
