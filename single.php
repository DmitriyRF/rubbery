<?php get_header(); ?>
<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->"; ?>


<div class="site-content-contain">
	<div id="content" class="site-content">

		<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Title</h2>
						<?php the_title(); ?>

						<h2>Content</h2>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div><!-- .wrap -->
	</div><!-- #content -->
</div><!-- .site-content-contain -->

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->"; ?>

<?php get_footer(); ?>