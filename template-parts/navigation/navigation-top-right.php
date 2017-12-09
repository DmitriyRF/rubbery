<?php 

	// Register Custom Navigation Walker
	require_once(  trailingslashit( get_template_directory() ) . 'includes/navwalker/rtrrubbery-navwalker.php');

?>

<nav class="navigation-top-right navbar navbar-expand">

   <?php
	   wp_nav_menu([
	     'menu'            => 'top-right',
	     'theme_location'  => 'top-right',
	     'container'       => 'div',
	     'container_id'    => 'rtrrubbery-top-right-menu',
	     'container_class' => 'collapse navbar-collapse',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav',
	     'depth'           => 3,
	     'fallback_cb'     => 'rtrrubbery_bs4_centralLogo_menu_navwalker::fallback',
	     'walker'          => new rtrrubbery_bs4_centralLogo_menu_navwalker()
	   ]);

   ?>

</nav>