<?php
/*
Plugin Name: Preloader Tomatoes
Plugin URI: http://www.kenguruka.ru/tomatoes-preloader
Description: Make a preloader spinning while the page is loading
Author: kengres
Author URI: http://www.kenguruka.ru
Version: 0.0.1

*/

add_action( 'wp_enqueue_scripts', 'register_scripts' );		

function register_scripts() {
	wp_register_script('preloader_tomatoes', plugins_url( 'preloader.js', __FILE__ ), 'jquery', 1.2, true);
}

add_action( 'wp_enqueue_scripts', 'load_js' );

function load_js() {
	wp_enqueue_script('preloader_tomatoes');
}