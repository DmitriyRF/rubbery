<?php 

	// Register Custom Navigation Walker
	require_once(  trailingslashit( get_template_directory() ) . 'includes/navwalker/rtrrubbery-navwalker.php');


?>

<nav class="navigation-top-mobile navbar rnavbar-collapse">

   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#rtrrubbery-top-mobile-menu" aria-controls="rtrrubbery-top-mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
   		<i class="fa fa-bars navbar-toggler-icon" aria-hidden="true"></i>
   </button>
   <?php
	   wp_nav_menu([
	     'menu'            => 'top-mobile',
	     'theme_location'  => 'top-mobile',
	     'container'       => 'div',
	     'container_id'    => 'rtrrubbery-top-mobile-menu',
	     'container_class' => 'collapse navbar-collapse justify-content-end',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav mr-auto',
	     'depth'           => 3,
	     'fallback_cb'     => 'rtrrubbery_bs4_centralLogo_menu_navwalker::fallback',
	     'walker'          => new rtrrubbery_bs4_centralLogo_menu_navwalker()
	   ]);

   ?>

</nav>
