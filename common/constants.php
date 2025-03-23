<?php
/**
 * Plugin constants.
 *
 * - Path
 * - URL
 *
 * @package WPMB_Plugin_CPT;
 */

defined( 'ABSPATH' ) || exit;

// Plugin path.
if ( ! defined( 'WPMB_PLUGIN_CPT_PATH' ) ) {
	define( 'WPMB_PLUGIN_CPT_PATH', plugin_dir_path( __FILE__ ) );
}

// Plugin URL.
if ( ! defined( 'WPMB_PLUGIN_CPT_URL' ) ) {
	define( 'WPMB_PLUGIN_CPT_URL', plugin_dir_url( __FILE__ ) );
}
