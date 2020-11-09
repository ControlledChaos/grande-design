<?php
/**
 * Post types and taxonomies.
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
 * Post types and taxonomies class.
 *
 * @since  1.0.0
 * @access public
 */
class Post_Types_Taxes {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Get class dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 *              Change to `self` if used.
	 */
	public function __construct() {

		// Frontend menus.
		add_filter( 'wp_get_nav_menu_items', [ $this, 'frontend_menus' ], 10, 3 );
	}

	/**
     * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
     */
	public function dependencies() {

		// Resister cutsom post types.
		require_once GGD_PATH . 'includes/post-types-taxes/class-register-post-types.php';

		// Resister cutsom taxonomies.
		require_once GGD_PATH . 'includes/post-types-taxes/class-register-taxonomies.php';

		// Functions related to post types and taxonomies.
		require_once GGD_PATH . 'includes/post-types-taxes/class-post-type-tax-functions.php';

		// Post types query on the blog front page.
		require_once GGD_PATH . 'includes/post-types-taxes/class-post-type-front-page.php';

		// Number of posts per archive page.
		require_once GGD_PATH . 'includes/post-types-taxes/class-posts-per-page.php';

		// Drag & drop custom post and taxonomy orders.
		require_once GGD_PATH . 'includes/post-types-taxes/class-post-type-order.php';

		// Capability to add custom taxonomy templates.
		require_once GGD_PATH . 'includes/post-types-taxes/class-taxonomy-templates.php';
	}

	/**
	 * Frontend menu
	 *
	 * Modify the output of menus to reword post type & taxonomy labels.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function frontend_menus( $items, $menu, $args ) {

		foreach ( $items as &$item ) {

			if ( $item->type != 'custom' ) {
				continue;
			}

			if ( get_query_var( 'post_type' ) == 'project' && is_singular( 'project' ) && $item->title == 'Portfolio' ) {
				$item->classes []= 'current-menu-item current-tax-ancestor';
			}

			if ( is_tax() && $item->title == 'Portfolio' ) {
				$item->classes []= 'current-menu-item current-tax-archive';
			}
		}

		return $items;
	}
}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ggd_types_taxes() {

	return Post_Types_Taxes::instance();

}

// Run an instance of the class.
ggd_types_taxes();