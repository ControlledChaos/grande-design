<?php
/**
 * Settings fields for script loading and more.
 *
 * @package    Grande_Design
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for script loading and more.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Scripts {

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
    public function __construct() {

		// Register settings.
		add_action( 'admin_init', [ $this, 'settings' ] );

		// Include jQuery Migrate.
		$migrate = get_option( 'ggd_jquery_migrate' );
		if ( ! $migrate ) {
			add_action( 'wp_default_scripts', [ $this, 'include_jquery_migrate' ] );
		}

	}

	/**
	 * Register settings via the WordPress/ClassicPress Settings API.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

		/**
		 * Generl script options.
		 */
		add_settings_section( 'ggd-scripts-general', __( 'General Options', 'grande-design' ), [ $this, 'scripts_general_section_callback' ], 'ggd-scripts-general' );

		// Inline scripts.
		add_settings_field( 'ggd_inline_scripts', __( 'Inline Scripts', 'grande-design' ), [ $this, 'ggd_inline_scripts_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Add script contents to footer', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_inline_scripts'
		);

		// Inline styles.
		add_settings_field( 'ggd_inline_styles', __( 'Inline Styles', 'grande-design' ), [ $this, 'ggd_inline_styles_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Add script-related CSS contents to head', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_inline_styles'
		);

		// Inline jQuery.
		add_settings_field( 'ggd_inline_jquery', __( 'Inline jQuery', 'grande-design' ), [ $this, 'ggd_inline_jquery_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Deregister jQuery and add its contents to footer', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_inline_jquery'
		);

		// Include jQuery Migrate.
		add_settings_field( 'ggd_jquery_migrate', __( 'jQuery Migrate', 'grande-design' ), [ $this, 'ggd_jquery_migrate_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Use jQuery Migrate for backwards compatibility', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_jquery_migrate'
		);

		// Remove emoji script.
		add_settings_field( 'ggd_remove_emoji_script', __( 'Emoji Script', 'grande-design' ), [ $this, 'remove_emoji_script_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Remove emoji script from <head>', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_remove_emoji_script'
		);

		// Remove WordPress/ClassicPress version appended to script links.
		add_settings_field( 'ggd_remove_script_version', __( 'Script Versions', 'grande-design' ), [ $this, 'remove_script_version_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Remove WordPress/ClassicPress version from script and stylesheet links in <head>', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_remove_script_version'
		);

		// Minify HTML.
		add_settings_field( 'ggd_html_minify', __( 'Minify HTML', 'grande-design' ), [ $this, 'html_minify_callback' ], 'ggd-scripts-general', 'ggd-scripts-general', [ esc_html__( 'Minify HTML source code to increase load speed', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-general',
			'ggd_html_minify'
		);

		/**
		 * Use included vendor scripts & options.
		 */
		add_settings_section( 'ggd-scripts-vendor', __( 'Included Vendor Scripts', 'grande-design' ), [ $this, 'scripts_vendor_section_callback' ], 'ggd-scripts-vendor' );

		// Use Slick.
		add_settings_field( 'ggd_enqueue_slick', __( 'Slick', 'grande-design' ), [ $this, 'enqueue_slick_callback' ], 'ggd-scripts-vendor', 'ggd-scripts-vendor', [ esc_html__( 'Use Slick script and stylesheets', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-vendor',
			'ggd_enqueue_slick'
		);

		// Use Tabslet.
		add_settings_field( 'ggd_enqueue_tabslet', __( 'Tabslet', 'grande-design' ), [ $this, 'enqueue_tabslet_callback' ], 'ggd-scripts-vendor', 'ggd-scripts-vendor', [ esc_html__( 'Use Tabslet script', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-vendor',
			'ggd_enqueue_tabslet'
		);

		// Use Sticky-kit.
		add_settings_field( 'ggd_enqueue_stickykit', __( 'Sticky-kit', 'grande-design' ), [ $this, 'enqueue_stickykit_callback' ], 'ggd-scripts-vendor', 'ggd-scripts-vendor', [ esc_html__( 'Use Sticky-kit script', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-vendor',
			'ggd_enqueue_stickykit'
		);

		/**
		 * Use Tooltipster.
		 *
		 * @todo Add option to enqueue on the backend.
		 */
		add_settings_field( 'ggd_enqueue_tooltipster', __( 'Tooltipster', 'grande-design' ), [ $this, 'enqueue_tooltipster_callback' ], 'ggd-scripts-vendor', 'ggd-scripts-vendor', [ esc_html__( 'Use Tooltipster script and stylesheet', 'grande-design' ) ] );

		register_setting(
			'ggd-scripts-vendor',
			'ggd_enqueue_tooltipster'
		);

		// Site Settings section.
		if ( ggd_acf_options() ) {

			add_settings_section( 'ggd-registered-fields-activate', __( 'Registered Fields Activation', 'grande-design' ), [ $this, 'registered_fields_activate' ], 'ggd-registered-fields-activate' );

			add_settings_field( 'ggd_acf_activate_settings_page', __( 'Site Settings Page', 'grande-design' ), [ $this, 'registered_fields_page_callback' ], 'ggd-registered-fields-activate', 'ggd-registered-fields-activate', [ __( 'Deactive the field group for the "Site Settings" options page.', 'grande-design' ) ] );

			register_setting(
				'ggd-registered-fields-activate',
				'ggd_acf_activate_settings_page'
			);

		}

	}

	/**
	 * General section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_general_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Inline settings only apply to scripts and styles included with the plugin.' ) );

		echo $html;

	}

	/**
	 * Inline jQuery.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function ggd_inline_jquery_callback( $args ) {

		$option = get_option( 'ggd_inline_jquery' );

		$html = '<p><input type="checkbox" id="ggd_inline_jquery" name="ggd_inline_jquery" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_inline_jquery"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>This may break the functionality of plugins that put scripts in the head</em>.</small></p>';

		echo $html;

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function ggd_jquery_migrate_callback( $args ) {

		$option = get_option( 'ggd_jquery_migrate' );

		$html = '<p><input type="checkbox" id="ggd_jquery_migrate" name="ggd_jquery_migrate" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_jquery_migrate"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Some outdated plugins and themes may be dependent on an old version of jQuery</em></small></p>';

		echo $html;

	}

	/**
	 * Inline scripts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function ggd_inline_scripts_callback( $args ) {

		$option = get_option( 'ggd_inline_scripts' );

		$html = '<p><input type="checkbox" id="ggd_inline_scripts" name="ggd_inline_scripts" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_inline_scripts"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Inline styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function ggd_inline_styles_callback( $args ) {

		$option = get_option( 'ggd_inline_styles' );

		$html = '<p><input type="checkbox" id="ggd_inline_styles" name="ggd_inline_styles" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_inline_styles"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Remove emoji script.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_emoji_script_callback( $args ) {

		$option = get_option( 'ggd_remove_emoji_script' );

		$html = '<p><input type="checkbox" id="ggd_remove_emoji_script" name="ggd_remove_emoji_script" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_remove_emoji_script"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Emojis will still work in modern browsers</em></small></p>';

		echo $html;

	}

	/**
	 * Script options and enqueue settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_script_version_callback( $args ) {

		$option = get_option( 'ggd_remove_script_version' );

		$html = '<p><input type="checkbox" id="ggd_remove_script_version" name="ggd_remove_script_version" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_remove_script_version"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Minify HTML source code.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function html_minify_callback( $args ) {

		$option = get_option( 'ggd_html_minify' );

		$html = '<p><input type="checkbox" id="ggd_html_minify" name="ggd_html_minify" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="ggd_html_minify"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Vendor section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_vendor_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Look for Fancybox options on the Media Settings page.' ) );

		echo $html;

	}

	/**
	 * Use Slick.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_slick_callback( $args ) {

		$option = get_option( 'ggd_enqueue_slick' );

		$html = '<p><input type="checkbox" id="ggd_enqueue_slick" name="ggd_enqueue_slick" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="ggd_enqueue_slick"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://kenwheeler.github.io/slick/' ) ),
			esc_attr( __( 'Learn more about Slick', 'grande-design' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tabslet.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tabslet_callback( $args ) {

		$option = get_option( 'ggd_enqueue_tabslet' );

		$html = '<p><input type="checkbox" id="ggd_enqueue_tabslet" name="ggd_enqueue_tabslet" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="ggd_enqueue_tabslet"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://vdw.github.io/Tabslet/' ) ),
			esc_attr( __( 'Learn more about Tabslet', 'grande-design' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Sticky-kit.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_stickykit_callback( $args ) {

		$option = get_option( 'ggd_enqueue_stickykit' );

		$html = '<p><input type="checkbox" id="ggd_enqueue_stickykit" name="ggd_enqueue_stickykit" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="ggd_enqueue_stickykit"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://leafo.net/sticky-kit/' ) ),
			esc_attr( __( 'Learn more about Sticky-kit', 'grande-design' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tooltipster.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tooltipster_callback( $args ) {

		$option = get_option( 'ggd_enqueue_tooltipster' );

		$html = '<p><input type="checkbox" id="ggd_enqueue_tooltipster" name="ggd_enqueue_tooltipster" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="ggd_enqueue_tooltipster"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://iamceege.github.io/tooltipster/' ) ),
			esc_attr( __( 'Learn more about Tooltipster', 'grande-design' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Site Settings section.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_activate() {

		if ( ggd_acf_options() ) {

			echo sprintf( '<p>%1s</p>', esc_html( 'The Controlled Chaos plugin registers custom fields for Advanced Custom Fields Pro that can be imported for editing. These built-in field goups must be deactivated for the imported field groups to take effect.', 'grande-design' ) );

		}

	}

	/**
	 * Site Settings section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_page_callback( $args ) {

		if ( ggd_acf_options() ) {

			$html = '<p><input type="checkbox" id="ggd_acf_activate_settings_page" name="ggd_acf_activate_settings_page" value="1" ' . checked( 1, get_option( 'ggd_acf_activate_settings_page' ), false ) . '/>';

			$html .= '<label for="ggd_acf_activate_settings_page"> '  . $args[0] . '</label></p>';

			echo $html;

		}

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function include_jquery_migrate( $scripts ) {

		if ( ! empty( $scripts->registered['jquery'] ) ) {

			$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, [ 'jquery-migrate' ] );

		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ggd_settings_fields_scripts() {

	return Settings_Fields_Scripts::instance();

}

// Run an instance of the class.
ggd_settings_fields_scripts();