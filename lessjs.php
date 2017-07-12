<?php
/*
Plugin Name: Less.js for WordPress
Plugin URI: http://www.ramoonus.nl/wordpress/lessjs/
Description: LESS, The dynamic stylesheet language.
Version: 1.7.3
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function less_js() {
	wp_deregister_script('less');
	//@todo debug; wp_enqueue_script('less', plugins_url('/js/less-1.7.3.js', __FILE__), false, '1.7.3');
	wp_enqueue_script('less', plugins_url('/js/less-1.7.3.min.js', __FILE__), false, '1.7.3');
}
add_action('init', 'less_js');

/*
// adds style.less to the header
function less_js_head() {

	// regular
	echo '<link rel="stylesheet/less" type="text/css" href="';
	echo bloginfo('template_directory');
	echo '/style.less" />';

	// regular child
	echo '<link rel="stylesheet/less" type="text/css" href="';
	echo bloginfo('stylesheet_directory');
	echo '/style.less" />';
	
	// print
	echo '<link rel="stylesheet/less" type="text/css" media="print" href="';
	echo bloginfo('template_directory');
	echo '/print.less" />';
	
	// print child
	echo '<link rel="stylesheet/less" type="text/css" media="print" href="';
	echo bloginfo('stylesheet_directory');
	echo '/print.less" />';
}
add_action('wp_head', 'less_js_head');
*/
?>