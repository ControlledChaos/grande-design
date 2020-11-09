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
$contact_id   = $contact_page->ID; ?>

<div class="abcd-dashboard-summary">
	<?php wp_dashboard_right_now(); ?>
</div>
<div class="abcd-dashboard-post-managment">
	<header class="abcd-dashboard-section-header">
		<h3><?php _e( 'Manage Your Portfolio', 'grande-design' ); ?></h3>
	</header>
	<ul class="abcd-dashboard-post-type-actions">
		<li>
			<h4><?php _e( 'Projects', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-post-type-actions-icon features-icon"><span class="dashicons dashicons-art"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=projects' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=projects' ); ?>"><?php _e( 'View List', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h4><?php _e( 'Images', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-format-gallery"></span></div>
			<p>
				<a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'grande-design' ); ?></a>
			</p>
		</li>
	</ul>
</div>
<div class="abcd-dashboard-content-managment">
	<header class="abcd-dashboard-section-header">
		<h3><?php _e( 'Manage Your Content', 'grande-design' ); ?></h3>
	</header>
	<ul class="abcd-dashboard-content-actions">
		<li>
			<h4><?php _e( 'Front Page', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Slides', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h4><?php _e( 'Snippets', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-content-actions-icon snippets-icon"><span class="dashicons dashicons-art"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=bloom_snippets' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=bloom_snippets' ); ?>"><?php _e( 'View List', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h4><?php _e( 'Gallery', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-content-actions-icon gallery-icon"><span class="dashicons dashicons-format-gallery"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . $gallery_id . '&action=edit' ); ?>"><?php _e( 'Manage Images', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h4><?php _e( 'Contact', 'grande-design' ); ?></h4>
			<div class="abcd-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'grande-design' ); ?></a>
			</p>
		</li>
	</ul>
</div>
