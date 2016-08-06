<?php
/**
 * _theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _theme
 */

$includes = array(
	'vendor/acf-options-page/acf-options-page.php', // Options Page GLobal for ACF
	'vendor/aq_resizer.php',	// Crop in images
	'lib/extras.php',       	// Custom functions
	'lib/assets.php',       	// Wp enqueue CSS and Scripts
	'lib/setup.php',			// Theme setup
	'lib/post_types.php',		// Custom Post Types
	'lib/taxonomies.php',		// Custom TAxonomies
);

foreach ($includes as $file) 
{
	if (!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion'), $file), E_USER_ERROR);
	}
	require_once $filepath;
}
unset($file, $filepath);