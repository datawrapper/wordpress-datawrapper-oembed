<?php
/**
 * @package Datawrapper
 * @version 1.0
 */
/*
Plugin Name: Datawrapper oembed
Plugin URI: http://wordpress.org/plugins/datawrapper-oembed/
Description: Registers Datawrapper as oembed provider so charts, maps, and tables created with Datawrapper can be embedded in WordPress.
Author: Gregor Aisch
Version: 1.0
Author URI: https://www.datawrapper.de/
License: GPLv2 or later
*/

// Register oEmbed providers
function datawrapper_oembed_provider() {

	wp_oembed_add_provider( 'https://datawrapper.dwcdn.net/*', 'https://api.datawrapper.de/v3/oembed', false );

}
add_action( 'init', 'datawrapper_oembed_provider' );
