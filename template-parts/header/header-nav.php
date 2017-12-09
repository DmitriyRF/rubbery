<?php 
/**
 *  Wrapper of header
 */
?>

<div class="header-background-wrapper">
	<div class="menu-background">
		<div class="desktop d-none d-lg-block">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-5 col-lg-side">		
						<?php if ( has_nav_menu( 'top-left' ) ) : ?>

							<?php get_template_part( 'template-parts/navigation/navigation', 'top-left' ); ?>

						<?php endif; ?>
					</div>
					<div class="col-2 col-lg-center">
						<div class="logo-position">
							<?php
								if ( function_exists( 'the_custom_logo' ) ) {
								    the_custom_logo();
								}
							?>
						</div>

					</div>
					<div class="col-5 col-lg-side">
						<?php if ( has_nav_menu( 'top-right' ) ) : ?>

							<?php get_template_part( 'template-parts/navigation/navigation', 'top-right' ); ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile d-lg-none">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col">

						<?php if ( has_nav_menu( 'top-mobile' ) ) : ?>

							<?php get_template_part( 'template-parts/navigation/navigation', 'top-mobile' ); ?>

						<?php endif; ?>

						<div class="logo-position">
							<?php
								if ( function_exists( 'the_custom_logo' ) ) {
								    the_custom_logo();
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
