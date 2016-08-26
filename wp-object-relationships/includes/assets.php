<?php

/**
 * Object Relationships Assets
 *
 * @package Plugins/Site/Aliases/Assets
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue admin scripts
 *
 * @since 0.1.0
 */
function wp_object_relationships_admin_enqueue_scripts() {

	// Set location & version for scripts & styles
	$src = wp_object_relationships_get_plugin_url();
	$ver = wp_object_relationships_get_asset_version();

	// Styles
	wp_enqueue_style( 'wp-object-relationships', $src . 'assets/css/site-aliases.css', array(), $ver );
}
