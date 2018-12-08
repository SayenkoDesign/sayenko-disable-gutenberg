<?php 
/*
	Plugin Name: Sayenko Disable Gutenberg
	Plugin URI: https://sayenkodesign.com/
	Description: Disables Gutenberg Block Editor
	Tags: gutenberg, block editor, block-editor, disable, blocks, post types
	Author: Sayenko Design
	Author URI: https://sayenkodesign.com/
	Requires at least: 4.5
	Tested up to: 5.0
	Stable tag: 1.4
	Version: 1.4
	Requires PHP: 5.2
	Text Domain: sayenko-disable-gutenberg
	Domain Path: /languages
	License: GPL v2 or later
*/


if (!defined('ABSPATH')) die();

// Disable Gutenberg

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 100);
	
} else {
	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false');
	
}