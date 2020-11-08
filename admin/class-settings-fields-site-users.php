<?php
/**
 * Settings fields for user options.
 *
 * @package    Grande_Design
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin;

use Grande_Design\Admin\Partials\Field_Callbacks\Users_Callbacks as Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for user options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Users {

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

			// Require the class files.
			$instance->dependencies();

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
    public function __construct() {

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Dashboard tab.
		require GGD_PATH . 'admin/partials/field-callbacks/class-users-callbacks.php';

	}

    /**
	 * User settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        // User settings section.
        add_settings_section(
            'ggd-site-users',
            __( 'User Settings', 'grande-design' ),
            [],
            'ggd-site-users'
        );

        // Local avatars only (no Gravatars).
		add_settings_field(
			'ggd_block_gravatar',
			__( 'Block Gravatars', 'grande-design' ),
			[ Callbacks::instance(), 'block_gravatar' ],
			'ggd-site-users',
			'ggd-site-users',
			[ esc_html__( 'Prevent avatar requests from Gravatar.com', 'grande-design' ) ]
		);

		register_setting(
			'ggd-site-users',
			'ggd_block_gravatar'
		);

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ggd_settings_fields_users() {

	return Settings_Fields_Users::instance();

}

// Run an instance of the class.
ggd_settings_fields_users();