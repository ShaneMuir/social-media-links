<?php
/**
* Plugin Name: Social Links
* Description: Adds social icons with links to profiles
* Version: 1.0
* Author: Shane Muirhead
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-widget-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-widget-class.php');

// Register Widget
function register_social_links(): void {
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links');
