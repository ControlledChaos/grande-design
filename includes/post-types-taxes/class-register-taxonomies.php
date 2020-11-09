<?php
/**
 * Register priority.
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
 * Register priority.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxes_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom priority.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom priority.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Project Category
         */

        $labels = [
            'name'                       => __( 'Project Categories', 'grande-design' ),
            'singular_name'              => __( 'Project Category', 'grande-design' ),
            'menu_name'                  => __( 'Project Category', 'grande-design' ),
            'all_items'                  => __( 'All Project Categories', 'grande-design' ),
            'edit_item'                  => __( 'Edit Project Category', 'grande-design' ),
            'view_item'                  => __( 'View Project Category', 'grande-design' ),
            'update_item'                => __( 'Update Project Category', 'grande-design' ),
            'add_new_item'               => __( 'Add New Project Category', 'grande-design' ),
            'new_item_name'              => __( 'New Project Category', 'grande-design' ),
            'parent_item'                => __( 'Parent Project Category', 'grande-design' ),
            'parent_item_colon'          => __( 'Parent Project Category', 'grande-design' ),
            'popular_items'              => __( 'Popular Project Categories', 'grande-design' ),
            'separate_items_with_commas' => __( 'Separate Project Categories with commas', 'grande-design' ),
            'add_or_remove_items'        => __( 'Add or Remove Project Categories', 'grande-design' ),
            'choose_from_most_used'      => __( 'Choose from the most used Project Categories', 'grande-design' ),
            'not_found'                  => __( 'No Project Categories Found', 'grande-design' ),
            'no_terms'                   => __( 'No Project Categories', 'grande-design' ),
            'items_list_navigation'      => __( 'Project Categories List Navigation', 'grande-design' ),
            'items_list'                 => __( 'Project Categories List', 'grande-design' )
        ];

        $options = [
            'label'                 => __( 'Project Categories', 'grande-design' ),
            'labels'                => $labels,
            'public'                => true,
            'hierarchical'          => false,
            'label'                 => 'Project Categories',
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'query_var'             => true,
            'rewrite'               => [
                'slug'         => 'priority',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'     => true,
            'show_in_rest'          => false,
			'rest_base'             => 'priority',
			'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_quick_edit'    => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'priority',
            [
                'project'
            ],
            $options
        );

    }

}

// Run the class.
$ggd_taxes = new Taxes_Register;