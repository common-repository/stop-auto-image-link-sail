<?php
/*
Plugin Name: Stop Auto Image LInk
Plugin URI: http://www.captaintheme.com/plugins/
Description: This plugin stops WordPress automatically-linking images when inserted - originally by Andrew Norcross (http://andrewnorcross.com/tutorials/stop-hyperlinking-images/)
Version: 1.0.0
Author: Captain Theme
Author URI: http://www.captaintheme.com/
License: GPL
*/

function sail_imagelink_setup() {
	// Assign the image_default_link_type option to a variable
	$image_set = get_option( 'image_default_link_type' );
	
	// Check if the option has been set or not and then update the option
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'sail_imagelink_setup', 10);