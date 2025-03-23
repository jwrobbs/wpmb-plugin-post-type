<?php
/**
 * Plugin CPT.
 *
 * @package WPMB_Plugin_CPT
 */

namespace WPMB_Plugin_CPT\CPTs;

defined( 'ABSPATH' ) || exit;

/**
 * Class Plugin_Post_Type
 */
class PluginPostType {
	/**
	 * Register hooks.
	 */
	public static function init() {
		add_action( 'init', array( static::class, 'register_post_type' ) );
	}

	/**
	 * Register the 'plugin' post type.
	 */
	public static function register_post_type() {
		register_post_type(
			'plugin',
			array(
				'labels'          => array(
					'name'               => 'Plugin Posts',
					'singular_name'      => 'Plugin Post',
					'add_new'            => 'Add New',
					'add_new_item'       => 'Add New Plugin Post',
					'edit_item'          => 'Edit Plugin Post',
					'new_item'           => 'New Plugin Post',
					'view_item'          => 'View Plugin Post',
					'search_items'       => 'Search Plugin Posts',
					'not_found'          => 'No plugin posts found',
					'not_found_in_trash' => 'No plugin posts found in Trash',
					'menu_name'          => 'Plugin Posts',
				),
				'public'          => true,
				'has_archive'     => true,
				'show_in_rest'    => true,
				'rest_base'       => 'plugins',
				'menu_icon'       => 'dashicons-admin-plugins',
				'supports'        => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'custom-fields',
					'author',
				),
				'show_ui'         => true,
				'show_in_menu'    => true,
				'capability_type' => 'post',
				'hierarchical'    => false,
				'query_var'       => true,
				'rewrite'         => array( 'slug' => 'plugin' ),
			)
		);
	}
}
