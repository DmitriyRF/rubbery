


<?php get_header(); ?>

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->" ?>

	<div class="site-content-contain page-php">
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
					</div>
				</div>
			</div><!-- .wrap -->
		</div><!-- #content -->
	</div><!-- .site-content-contain -->

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

<?php get_footer(); ?>