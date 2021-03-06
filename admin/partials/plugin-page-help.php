<?php
/**
 * About page output.
 *
 * This page uses the jQuery tabs from the jQuery UI suite that is included
 * with WordPress/ClassicPress. Tabs are activated by targeting the `backend-tabbed-content`
 * in this plugin's admin.js file.
 *
 * @package    Grande_Design
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @see        Tabs admin/assets/js/admin.js
 * @link       Dashicons https://developer.wordpress.org/resource/dashicons/
 */

namespace Grande_Design\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugin data.
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$plugin_data = get_plugin_data( __FILE__ );
$plugin_name = $plugin_data['Name'];

/**
 * Site Settings tab icon.
 *
 * The Site Settings page has options to make the page top-level in
 * the admin menu and set a Dashicons icon. If an icon has been set
 * for the link in the admin menu then we will use the same icon here
 * for the Site Settings tab.
 *
 * @since  1.0.0
 * @return void
 */

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

	// Introduction tab.
	sprintf(
		'<li><a href="%1s"><span class="dashicons dashicons-welcome-learn-more"></span> %2s</a></li>',
		'#intro',
		esc_html__( 'Introduction', 'grande-design' )
	),

	// Projects tab.
	sprintf(
		'<li><a href="%1s"><span class="dashicons dashicons-art"></span> %2s</a></li>',
		'#projects',
		esc_html__( 'Projects', 'grande-design' )
	),

	// Images tab.
	sprintf(
		'<li><a href="%1s"><span class="dashicons dashicons-format-gallery"></span> %3s</a></li>',
		'#images',
		esc_html__( 'Images', 'grande-design' )
	),

	// Videos tab.
	sprintf(
		'<li><a href="%1s"><span class="dashicons dashicons-format-video"></span> %2s</a></li>',
		'#videos',
		esc_html__( 'Videos', 'grande-design' )
	),

	// Settings tab.
	sprintf(
		'<li><a href="%1s"><span class="dashicons dashicons-admin-generic"></span> %2s</a></li>',
		'#settings',
		esc_html__( 'Settings', 'grande-design' )
	),

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'ggd_tabs_page_about', $tabs );

?>
<!-- Default WordPress/ClassicPress page wrapper -->
<div class="wrap site-plugin-wrap">

	<!-- Page heading -->
	<?php echo sprintf( '<h1 class="wp-heading-inline">%1s %2s</h1>', get_bloginfo( 'name' ), esc_html__( 'Website Help', 'grande-design' ) ); ?>

	<!-- Page description -->
	<?php echo sprintf(
		'<p class="description">%s %s %s</p>',
		__( 'A reference for using your website when using the', 'grande-design' ),
		GGD_PLUGIN_NAME,
		__( 'plugin.', 'grande-design' )
	); ?>

	<!-- Begin jQuery tabbed content -->
	<div class="backend-tabbed-content">
		<ul>
			<?php echo implode( $page_tabs ); ?>
		</ul>
		<?php // Hook for adding tabbed content.
		do_action( 'ggd_content_page_about_before' ); ?>
		<!-- Begin content -->
		<div id="intro"><!-- Introduction content -->
			<?php include_once GGD_PATH . 'admin/partials/plugin-page-intro.php'; ?>
		</div>
		<div id="projects"><!-- Media Options content -->
			<?php include_once GGD_PATH . 'admin/partials/plugin-page-projects.php'; ?>
		</div>
		<div id="images"><!-- Images content -->
			<?php include_once GGD_PATH . 'admin/partials/plugin-page-images.php'; ?>
		</div>
		<div id="videos"><!-- Videos content -->
			<?php include_once GGD_PATH . 'admin/partials//plugin-page-videos.php'; ?>
		</div>
		<div id="settings"><!-- Dev Tools content -->
			<?php include_once GGD_PATH . 'admin/partials/plugin-page-settings.php'; ?>
		</div>
		<?php

		// Hook for adding tabbed content.
		do_action( 'ggd_content_page_about_after' ); ?>

	</div><!-- End jQuery tabbed content -->

	<footer>
		<?php echo sprintf(
			'<p class="description"><strong>%s</strong> %s <a href="%s">%s</a> %s</p>',
			__( 'Developers:', 'grande-design' ),
			__( 'The content of these tabs can be edited in the', 'grande-design' ),
			esc_url( admin_url( 'edit.php?post_type=website_help' ) ),
			__( 'Website Help', 'grande-design' ),
			__( 'post type.', 'grande-design' )
		); ?>
	</footer>

</div><!-- End WordPress/ClassicPress page wrapper -->