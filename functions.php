<?php

function toacy_script_enqueue(){
	wp_enqueue_style('toacystyle-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('toacystyle-theme-plugins', get_template_directory_uri().'/css/theme-plugins.css', array(), '1.0', 'all');
	wp_enqueue_style('toacystyle', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
	wp_enqueue_style('toacystyle-responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0', 'all');
	wp_enqueue_style('toacystyle-skin', get_template_directory_uri().'/css/skin/skin1.css', array(), '1.0', 'all');
	wp_enqueue_script('toacy-jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-modernizr', get_template_directory_uri().'/js/modernizr.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-theme-plugins', get_template_directory_uri().'/js/theme-plugins.js', array(), '1.0', true);
	//wp_enqueue_script('toacy-googlemapapi', get_template_directory_uri().'/js/googlemapapi.js', array(), '1.0', true);
	wp_enqueue_script('toacyjs', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'toacy_script_enqueue');

// if (function_exists('register_sidebar')) {
	
// 		register_sidebar(array(
// 			'name' => 'Default',
// 			'id'   => 'default-widget',
// 			'description'   => 'This is a widgetized area.',
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<h4>',
// 			'after_title'   => '</h4>'
// 		));
	
// 	}

	function toacy_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Blog Sidebar', 'toacy' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Header Widget 1', 'toacy' ),
			'id'            => 'header-widget-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'toacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Header Widget 2', 'toacy' ),
			'id'            => 'header-widget-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'toacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Header Widget 3', 'toacy' ),
			'id'            => 'header-widget-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'toacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer 1', 'toacy' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'toacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	
		register_sidebar( array(
			'name'          => __( 'Footer 2', 'toacy' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'toacy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );


			
	}
	add_action( 'widgets_init', 'toacy_widgets_init' );