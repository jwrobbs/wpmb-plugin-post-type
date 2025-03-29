<?php
/**
 * Plugin Status Taxonomy.
 *
 * @package WPMB_Plugin_CPT
 */

namespace WPMB_Plugin_CPT\Taxonomies;

defined( 'ABSPATH' ) || exit;

/**
 * Class PluginStatus
 */
class PluginStatus {
	/**
	 * Register the 'plugin_status' taxonomy.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'register_status_taxonomy' ) );
	}

	/**
	 * Register the 'plugin_status' taxonomy.
	 */
	public static function register_status_taxonomy() {
		register_taxonomy(
			'plugin_status',
			'plugin',
			array(
				'label'             => 'Status',
				'hierarchical'      => false,
				'show_ui'           => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'status' ),
				'labels'            => array(
					'name'          => 'Statuses',
					'singular_name' => 'Status',
					'search_items'  => 'Search Statuses',
					'all_items'     => 'All Statuses',
					'edit_item'     => 'Edit Status',
					'update_item'   => 'Update Status',
					'add_new_item'  => 'Add New Status',
					'new_item_name' => 'New Status Name',
					'menu_name'     => 'Status',
				),
			)
		);
	}
}
