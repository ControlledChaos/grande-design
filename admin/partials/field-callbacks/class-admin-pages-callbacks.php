<?php
/**
 * Callbacks for the Admin Pages tab on the Site Settings page.
 *
 * @package    Grande_Design
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Callbacks for the Admin Pages tab.
 *
 * @since  1.0.0
 * @access public
 */
class Admin_Pages_Callbacks {

	/**
	 * Instance of the class
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

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {}

	/**
	 * Use the admin header.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function admin_header( $args ) {

		$option = get_option( 'ggd_use_admin_header' );

		$html = '<p><input type="checkbox" id="ggd_use_admin_header" name="ggd_use_admin_header" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_use_admin_header"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Use custom drag & drop sort order.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function custom_sort_order( $args ) {

		$option = get_option( 'ggd_use_custom_sort_order' );

		$html = '<p><input type="checkbox" id="ggd_use_custom_sort_order" name="ggd_use_custom_sort_order" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_use_custom_sort_order"> '  . $args[0] . '</label></p>';

		echo $html;

	}
}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ggd_admin_pages_callbacks() {
	return Admin_Pages_Callbacks::instance();
}

// Run an instance of the class.
ggd_admin_pages_callbacks();
