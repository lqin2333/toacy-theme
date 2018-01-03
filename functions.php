<?php

function toacy_script_enqueue(){
	wp_enqueue_style('toacystyle', get_template_directory_uri().'/css/toacystyle.css', array(), '1.0', 'all');
	wp_enqueue_script('toacy-jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-modernizr', get_template_directory_uri().'/js/modernizr.min.js', array(), '1.0', true);
	wp_enqueue_script('toacy-theme-plugins', get_template_directory_uri().'/js/theme-plugins.js', array(), '1.0', true);
	//wp_enqueue_script('toacy-googlemapapi', get_template_directory_uri().'/js/googlemapapi.js', array(), '1.0', true);
	wp_enqueue_script('toacyjs', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'toacy_script_enqueue');