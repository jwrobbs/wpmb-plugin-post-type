<?php
/**
 * Hook initialization for plugin.
 *
 * @package WPMB_Plugin_CPT
 */

namespace WPMB_Plugin_CPT_Common;

use WPMB_Plugin_CPT\CPTs\PluginPostType;
use WPMB_Plugin_CPT\Taxonomies\PluginStatus;

defined( 'ABSPATH' ) || exit;

/**
 * Class Hooks
 */
class Hooks {

	/**
	 * Init.
	 */
	public static function init() {
		PluginPostType::init();
		PluginStatus::init();
	}
}
