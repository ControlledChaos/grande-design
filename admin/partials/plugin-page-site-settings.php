<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Grande_Design
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'grande-design' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'grande-design' ),
	esc_url( admin_url( '?page=' . GGD_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'grande-design' ),
	__( 'for customizing the user interface of WordPress/ClassicPress, as well as other useful features.', 'grande-design' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'grande-design' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress/ClassicPress news, quick press', 'grande-design' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'grande-design' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'grande-design' ); ?></li>
	<li><?php _e( 'Remove WordPress/ClassicPress logo from admin bar', 'grande-design' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'grande-design' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'grande-design' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'grande-design' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'grande-design' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'grande-design' ); ?></li>
</ul>