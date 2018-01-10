<?php

add_action('after_switch_theme', 	'min_wordpress_version_for_rtrrubbery_theme');

add_action('after_switch_theme', 	'rtrrubbery_add_theme_database');

add_action('after_switch_theme', 	'rtrrubbery_add_theme_options');


function min_wordpress_version_for_rtrrubbery_theme(){

	if ( version_compare(get_bloginfo( 'version' ), '4.9', '<' )){

		wp_die( __( 'You must have a minimum WordPress version of 4.7 to use this theme!', 'rtrrubbery' ) );
	}

}

function rtrrubbery_add_theme_database(){

	global $wpdb;

	$table_name = $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

		$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		$sql = "CREATE TABLE {$table_name} (
		    ID int(11) unsigned NOT NULL auto_increment,
		    header varchar(255) NOT NULL default '',
		    description TEXT NOT NULL default '',
		    image TEXT NOT NULL default '',
		    button varchar(2000) NOT NULL default '',
		    link TEXT NOT NULL default '',
		    PRIMARY KEY  (ID)
		) {$charset_collate};";

		// create table.
		dbDelta( $sql );

	}
}



function rtrrubbery_add_theme_options(){ 

	$theme_options					=	get_option( 'rtrrubbery_theme_options' );

	if( ! $theme_options ){
		$opts 						=	array(
			'some_option'		=>	'',
		);

		add_option('rtrrubbery_theme_options', $opts);

	}
}