<?php


add_action( 'admin_menu', 'rtrrubbery_admin_menus' );

function rtrrubbery_admin_menus(){		

		/*
		add_menu_page( 
			string $page_title, 
			string $menu_title, 
			string $capability, 
			string $menu_slug, 
			callable $function = '', 
			string $icon_url = '', 
			int $position = null )
		*/

		add_menu_page(
			__( 'Settings', 'rtrrubbery'),
			__( 'RTR Rubbery', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_options_page',
			'rtrrubbery_theme_sliders_function'
		);



	/*		
		add_submenu_page( 
			string $parent_slug, 
			string $page_title, 
			string $menu_title, 
			string $capability, 
			string $menu_slug, 	
			callable $function = '' )
	*/

		// add_submenu_page( 
		// 	'rtrrubbery_theme_options_page', 
		// 	__( 'Rtrrubbery Settings', 'rtrrubbery'), 
		// 	__( 'Rtrrubbery options', 'rtrrubbery'),
		// 	'edit_theme_options',
		// 	'rtrrubbery_theme_options_page',
		// 	'rtrrubbery_theme_options_function'
  //   	);

		add_submenu_page( 
			'rtrrubbery_theme_options_page', 
			__( 'Sliders', 'rtrrubbery'), 
			__( 'Sliders', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_options_page',
			// 'rtrrubbery_theme_sliders_page',
			'rtrrubbery_theme_sliders_function'
    	);

		add_submenu_page( 
			'rtrrubbery_theme_options_page', 
			__( 'Add slider', 'rtrrubbery'), 
			__( 'Add slider', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_add_slider_page',
			'rtrrubbery_theme_add_slider_function'
    	);

		add_submenu_page( 
			null, 
			__( 'Edit slider', 'rtrrubbery'), 
			__( 'Edit slider', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_edit_slider_page',
			'rtrrubbery_theme_edit_slider_function'
    	);
}

	include_once('menu-tab-options-page.php');

	include_once('menu-tab-sliders-page.php');

	include_once('menu-tab-add-slider-page.php');
	include_once('menu-tab-add-slider-save-calback.php');

	include_once('menu-tab-edit-slider-page.php');
	include_once('menu-tab-edit-slider-save-callback.php');
	
	include_once( THEME_DIR . 'admin/classes/rtrrubbery-extends-class-sliders-table.php' );
	include_once( THEME_DIR . 'admin/rtrrubbery-wp-database-slider.php' );
