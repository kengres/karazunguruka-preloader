<?php
/*
Plugin Name: Karazunguruka Preloader
Plugin URI: http://www.kenguruka.ru/karazunguruka-preloader
Description: Make a preloader spinning while the page is loading
Author: kengres
Author URI: http://www.kenguruka.ru
Version: 1.0.0

*/

add_action( 'wp_enqueue_scripts', 'register_scripts' );		

function register_scripts() {
	wp_register_script('preloader_tomatoes', plugins_url( 'preloader.js', __FILE__ ), 'jquery', 1.2, true);
}

add_action( 'wp_enqueue_scripts', 'load_js' );

function load_js() {
	wp_enqueue_script('preloader_tomatoes');
}