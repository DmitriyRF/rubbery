<?php


add_action( 'admin_menu', 'rtrrubbery_admin_menus' );

function rtrrubbery_admin_menus(){
		// add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, 
		// 											callable $function = '', string $icon_url = '', int $position = null )
/*		add_menu_page(
			__( 'Settings', 'rtrrubbery'),
			__( 'Rtrrubbery', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_options_page',
			'rtrrubbery_theme_options_function'
		);*/



		//add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, 
		//							callable $function = '' )
/*		add_submenu_page( 
			'rtrrubbery_theme_options_page', 
			__( 'Settings', 'rtrrubbery'), 
			__( 'Rtrrubbery options', 'rtrrubbery'),
			'edit_theme_options',
			'rtrrubbery_theme_options_page',
			'rtrrubbery_theme_options_function'
    	);*/
}