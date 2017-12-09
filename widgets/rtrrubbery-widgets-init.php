<?php


/**
 * Register widget area.
 **/
add_action( 'widgets_init', 'rtrrubbery_widgets_init' );

function rtrrubbery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'rtrrubbery' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'rtrrubbery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title-page color-first-word">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer left', 'rtrrubbery' ),
		'id'            => 'left-sidebar',
		'description'   => __( 'Add widgets here to appear in your footer.', 'rtrrubbery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer right', 'rtrrubbery' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Add widgets here to appear in your footer.', 'rtrrubbery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}