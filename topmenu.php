<?php
/**
 * @package top_menu_iyaa_plugin
 * @version 0.2
 */
/*
Plugin Name: Top Menu Plugin
Author: IONsoft
Description: Top menu for blog.iyaa.com
Version: 0.2
Author URI: http://blog.iyaa.com/
Plugin URI: https://github.com/gettyfadillah/blog.iyaa.com/
*/


function themeslug_enqueue_script() {
	wp_enqueue_script( '', 'http://www.iyaa.com/js/iyaa.top.menu.js', true);
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

?>
