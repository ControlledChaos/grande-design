<?php
/**
 * Register post types.
 *
 * @package    Grande_Design
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

	/**
	 * Constructor magic method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Register project types.
		add_action( 'init', [ $this, 'register' ] );

	}

	/**
	 * Register project types.
	 *
	 * Note for WordPress 5.0 or greater:
	 * If you want your post type to adopt the block edit_form_image_editor
	 * rather than using the classic editor then set `show_in_rest` to `true`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		/**
		 * Post Type: Projects
		 */

		$labels = [
			'name'                  => __( 'Projects', 'grande-design' ),
			'singular_name'         => __( 'Project', 'grande-design' ),
			'menu_name'             => __( 'Projects', 'grande-design' ),
			'all_items'             => __( 'All Projects', 'grande-design' ),
			'add_new'               => __( 'Add New', 'grande-design' ),
			'add_new_item'          => __( 'Add New Project', 'grande-design' ),
			'edit_item'             => __( 'Edit Project', 'grande-design' ),
			'new_item'              => __( 'New Project', 'grande-design' ),
			'view_item'             => __( 'View Project', 'grande-design' ),
			'view_items'            => __( 'View Projects', 'grande-design' ),
			'search_items'          => __( 'Search Projects', 'grande-design' ),
			'not_found'             => __( 'No Projects Found', 'grande-design' ),
			'not_found_in_trash'    => __( 'No Projects Found in Trash', 'grande-design' ),
			'parent_item_colon'     => __( 'Parent Project', 'grande-design' ),
			'featured_image'        => __( 'Featured image for this project', 'grande-design' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'grande-design' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'grande-design' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'grande-design' ),
			'archives'              => __( 'Project archives', 'grande-design' ),
			'insert_into_item'      => __( 'Insert into Project', 'grande-design' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'grande-design' ),
			'filter_items_list'     => __( 'Filter Projects', 'grande-design' ),
			'items_list_navigation' => __( 'Projects list navigation', 'grande-design' ),
			'items_list'            => __( 'Projects List', 'grande-design' ),
			'attributes'            => __( 'Project Attributes', 'grande-design' ),
			'parent_item_colon'     => __( 'Parent Project', 'grande-design' ),
		];

		// Apply a filter to labels for customization.
		$labels = apply_filters( 'project_labels', $labels );

		$options = [
			'label'               => __( 'Projects', 'grande-design' ),
			'labels'              => $labels,
			'description'         => __( 'Projects featured in the Grande Design portfolio.', 'grande-design' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => 'project_rest_api',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'projects',
				'with_front' => true
			],
			'query_var'           => 'project',
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-art',
			'supports'            => [
				'title',
				'thumbnail',
				'excerpt'
			],
			'taxonomies'          => [
				// May use tags. 'post_tag',
				'priority'
			],
		];

		// Apply a filter to arguments for customization.
		$options = apply_filters( 'project_args', $options );

		/**
		 * Register the post type
		 */
		register_post_type(
			'project',
			$options
		);

		/**
		 * Post Type: Help
		 */

		$labels = [
			'name'                  => __( 'Website Help', 'grande-design' ),
			'singular_name'         => __( 'Help Page', 'grande-design' ),
			'menu_name'             => __( 'Website Help', 'grande-design' ),
			'all_items'             => __( 'All Help Pages', 'grande-design' ),
			'add_new'               => __( 'New Help Page', 'grande-design' ),
			'add_new_item'          => __( 'New Help Page', 'grande-design' ),
			'edit_item'             => __( 'Edit Help Page', 'grande-design' ),
			'new_item'              => __( 'New Help Page', 'grande-design' ),
			'view_item'             => __( 'View Help Page', 'grande-design' ),
			'view_items'            => __( 'View Help Page', 'grande-design' ),
			'search_items'          => __( 'Search Help Pages', 'grande-design' ),
			'not_found'             => __( 'No Help Pages Found', 'grande-design' ),
			'not_found_in_trash'    => __( 'No Help Pages Found in Trash', 'grande-design' ),
			'parent_item_colon'     => __( 'Parent Help Page', 'grande-design' ),
			'featured_image'        => __( 'Featured image for this help', 'grande-design' ),
			'set_featured_image'    => __( 'Set featured image for this help page', 'grande-design' ),
			'remove_featured_image' => __( 'Remove featured image for this help page', 'grande-design' ),
			'use_featured_image'    => __( 'Use as featured image for this help page', 'grande-design' ),
			'archives'              => __( 'Help Pages Archives', 'grande-design' ),
			'insert_into_item'      => __( 'Insert into Help Page', 'grande-design' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Help Page', 'grande-design' ),
			'filter_items_list'     => __( 'Filter Help Page', 'grande-design' ),
			'items_list_navigation' => __( 'Help Pages list navigation', 'grande-design' ),
			'items_list'            => __( 'Help Pages List', 'grande-design' ),
			'attributes'            => __( 'Help Page Attributes', 'grande-design' ),
			'parent_item_colon'     => __( 'Parent Help Page', 'grande-design' ),
		];

		// Apply a filter to labels for customization.
		$labels = apply_filters( 'help_labels', $labels );

		$options = [
			'label'               => __( 'Help Pages', 'grande-design' ),
			'labels'              => $labels,
			'description'         => __( 'Website user help pages.', 'grande-design' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => false,
			'show_in_menu'        => false,
			'exclude_from_search' => true,
			// Sets user role levels, accepts array: 'capabilities'        => [],
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => false,
			'query_var'           => 'help',
			'menu_position'       => 100,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'supports'            => [
				'title',
				'editor',
				'thumbnail',
				'excerpt'
			],
			'taxonomies'          => [],
		];

		// Apply a filter to arguments for customization.
		$options = apply_filters( 'help_args', $options );

		/**
		 * Register the post type
		 */
		register_post_type(
			'website_help',
			$options
		);

	}

}

// Run the class.
$projects = new Post_Types_Register;