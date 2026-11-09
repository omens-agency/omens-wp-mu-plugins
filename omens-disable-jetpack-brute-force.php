<?php
/**
 * Plugin Name: Omens: Disable Jetpack Brute Force Protection
 * Description: Keeps Jetpack's Brute Force Protection module (protect) off so the login page never shows the "Prove your humanity" math question. Pressable's platform bot protection and Jetpack Account Protection are unaffected.
 * Version: 1.0.0
 * Author: Omens
 * Author URI: https://omens.agency/
 * License: GPL-2.0-or-later
 */

defined( 'ABSPATH' ) || exit;

/**
 * Remove the module from Jetpack's available list, so it cannot be turned on from wp-admin or WP-CLI.
 */
add_filter(
	'jetpack_get_available_modules',
	static function ( $modules ) {
		unset( $modules['protect'] );
		return $modules;
	}
);

/**
 * Treat the module as inactive even if the stored option still lists it.
 */
add_filter(
	'jetpack_active_modules',
	static function ( $modules ) {
		return array_values( array_diff( (array) $modules, array( 'protect' ) ) );
	}
);
