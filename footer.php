<?php
/**
 * 
 * The template for displaying the footer
 */
?>

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->" ?>


	<?php
	/**
	 * rtrrubbery_hook_content_after hook
	 * 
	 * @see
	 * 
	 */
	do_action( 'rtrrubbery_hook_content_after' );
	?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<div class="pattern">
				<?php

					get_template_part( 'template-parts/footer/footer', 'widgets' );

					get_template_part( 'template-parts/footer/footer', 'social' );

					get_template_part( 'template-parts/footer/footer', 'info' );

				?>
			</div>
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<?php
	/**
	 * rtrrubbery_hook_after_scripts_enqueue hook
	 * 
	 * @see
	 * 
	 */
	do_action( 'rtrrubbery_hook_after_scripts_enqueue' );
	?>

</body>
<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>
</html>


