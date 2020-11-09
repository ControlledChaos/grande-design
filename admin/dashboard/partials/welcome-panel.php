<?php
/**
 * Custom welcome panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    Grande_Design
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$contact_page = get_page_by_path( 'contact' );
$contact_id   = null;

if ( $contact_page ) {
	$contact_id = $contact_page->ID;
}

?>
<div class="grande-dashboard-summary">
	<?php wp_dashboard_right_now(); ?>
</div>

<div class="grande-dashboard-post-managment">

	<header class="grande-dashboard-section-header">
		<h3><?php _e( 'Manage Your Portfolio', 'grande-design' ); ?></h3>
	</header>

	<ul class="grande-dashboard-actions-list grande-dashboard-post-type-actions">
		<li>
			<h4><?php _e( 'Projects', 'grande-design' ); ?></h4>
			<div class="grande-dashboard-icon features-icon"><span class="dashicons dashicons-art"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=project' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=project' ); ?>"><?php _e( 'View List', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h4><?php _e( 'Images', 'grande-design' ); ?></h4>
			<div class="grande-dashboard-icon media-icon"><span class="dashicons dashicons-format-gallery"></span></div>
			<p>
				<a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'grande-design' ); ?></a>
			</p>
		</li>
	</ul>
</div>

<div class="grande-dashboard-content-managment">

	<header class="grande-dashboard-section-header">
		<h3><?php _e( 'Manage Your Content', 'grande-design' ); ?></h3>
	</header>

	<ul class="grande-dashboard-actions-list grande-dashboard-content-actions">
		<li>
			<h4><?php _e( 'Front Page', 'grande-design' ); ?></h4>
			<div class="grande-dashboard-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Slides', 'grande-design' ); ?></a>
			</p>
		</li>
		<?php if ( $contact_page ) : ?>
		<li>
			<h4><?php _e( 'Contact', 'grande-design' ); ?></h4>
			<div class="grande-dashboard-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'grande-design' ); ?></a>
			</p>
		</li>
		<?php endif; // $contact_page ?>
	</ul>
</div>
