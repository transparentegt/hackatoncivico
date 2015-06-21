<?php
if ( !defined('COUNTDOWNDATE') )
    define('COUNTDOWNDATE', '2015/07/12 10:00:00'); // Format: yyyy/mm/dd h:i:s

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

	wp_register_script(  'jquerycountdown', get_stylesheet_directory_uri() . '/rsc/js/jquery.countdown.min.js',  array('jquery'),'1.0' );
	wp_enqueue_script('jquerycountdown');

    wp_register_script(  'hackatonjs', get_stylesheet_directory_uri() . '/rsc/js/hackaton.js',  array('jquery', 'jquerycountdown'),'1.0' );
	wp_enqueue_script('hackatonjs');
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}