<?php
/**
 * The main template file RTRrubber theme
 */


get_header(); ?>

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->" ?>

<div class="site-content-contain">
	<div id="content" class="site-content">

		<div class="wrap">
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php else : ?>
			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
			</header>
			<?php endif; ?>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							//get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else :

						// get_template_part( 'template-parts/post/content', 'none' );

					endif;
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
			<?php // get_sidebar(); ?>
		</div><!-- .wrap -->
	</div><!-- #content -->
</div><!-- .site-content-contain -->

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

<?php get_footer();
