<?php
/**
 * The header for our theme
 **/
?>

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1.0">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php
	/**
	 * rtrrubbery_header_meta hook
	 *
	 * @see 
	 */
	do_action('rtrrubbery_header_meta');
	?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header">

			<?php get_template_part( 'template-parts/header/header', 'nav' ); ?>

		</header><!-- #masthead -->
	
		<?php
		/**
		 * rtrrubbery_hook_content_before hook
		 * 
		 * @see
		 */
		do_action( 'rtrrubbery_hook_content_before' );
		?>

<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>
