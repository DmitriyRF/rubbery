<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<?php echo "<!- Start 404.php -->"; ?>

<div class="wrap-404">
	<div id="primary" class="content-area">
		<main id="main" class="container" role="main">

			<section class="error-404 not-found row">

				<header class="page-header col-12">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'rtrrubbery' ); ?></h1>
				</header><!-- .page-header -->
				<div class="col-12">
					<div class="rt-error-box">
						<h2 class="error-title">404</h2>
						<h4><strong><?php _e( 'You may not be able to visit this page because of:', 'rtrrubbery' ); ?></strong></h4>
						<ol>
							<li>an out-of-date bookmark/favourite</li>
							<li>a search engine that has an out-of-date listing for this site</li>
							<li>a mistyped address</li>
							<li>you have no access to this page</li>
							<li>The requested resource was not found.</li>
							<li>An error has occurred while processing your request.</li>
						</ol>
						<p></p>
							<a href="/" type="button" class="btn btn-light btn-lg readon">
								<span>← Home</span>
							</a>
					</div>
				</div>
				<div class="page-content col-12">
					<h4><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'rtrrubbery' ); ?></h4>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php echo "<!- End 404.php -->"; ?>

<?php get_footer();
