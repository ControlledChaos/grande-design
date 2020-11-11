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

if ( ! current_user_can( 'edit_posts' ) ) {
	return;
}

/**
 * Get pages by slug
 *
 * Look for specific page slaug and add edit links
 * by ID if they exist.
 */

// Resume & bio page.
$resume_page = get_page_by_path( 'resume' );
$resume_id   = null;

if ( $resume_page ) {
	$resume_id = $resume_page->ID;
}

// Contact page.
$contact_page = get_page_by_path( 'contact' );
$contact_id   = null;

if ( $contact_page ) {
	$contact_id = $contact_page->ID;
}

?>
<div class="grande-dashboard-summary">

	<h2><?php _e( 'Website Summary', 'grande-design' ); ?></h2>

	<?php do_action( 'before_right_now' ); ?>

	<?php wp_dashboard_right_now(); ?>

	<?php do_action( 'after_right_now' ); ?>

	<?php echo sprintf(
		'<p class="grande-website-help-link">%s <a href="%s">%s</a></p>',
		__( 'For tips and assistance managing this website visit the', 'grande-design' ),
		esc_url( admin_url( 'index.php?page=grande-design-page' ) ),
		__( 'Website Help page', 'grande-design' )
	); ?>
</div>

<div class="grande-dashboard-post-managment">

	<header class="grande-dashboard-section-header">
		<h2><?php _e( 'Manage Your Portfolio', 'grande-design' ); ?></h2>
		<p class="description"><strong><?php _e( 'Remember that it is best practice to resize very images prior to upload, then add titles and descriptions, and crop as necessary prior to adding them to a project.', 'grande-design' ); ?></strong></p>
	</header>

	<ul class="grande-dashboard-actions-list grande-dashboard-post-type-actions">
		<li>
			<h3><?php _e( 'Media', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon media-library-icon"><span class="dashicons dashicons-format-gallery"></span></div>
			<p>
				<a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Projects', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon projects-icon"><span class="dashicons dashicons-art"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=project' ); ?>"><?php _e( 'Add New', 'grande-design' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=project' ); ?>"><?php _e( 'View List', 'grande-design' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Categories', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon categories-icon"><span class="dashicons dashicons-category"></span></div>
			<p>
			<a href="<?php echo admin_url( 'edit-tags.php?taxonomy=priority&post_type=project' ); ?>"><?php _e( 'Manage Categories', 'grande-design' ); ?></a>
			</p>
		</li>
	</ul>
</div>

<div class="grande-dashboard-content-managment">

	<header class="grande-dashboard-section-header">
		<h2><?php _e( 'Manage Your Content', 'grande-design' ); ?></h2>

		<p class="description"><strong><?php _e( 'Following are links to manage the primary pages on your site.', 'grande-design' ); ?></strong></p>
	</header>

	<ul class="grande-dashboard-actions-list grande-dashboard-content-actions">
		<?php if ( $resume_page ) : ?>
		<li>
			<h3><?php _e( 'Resume', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon resume-icon"><span class="dashicons dashicons-businessman"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . $resume_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'grande-design' ); ?></a>
			</p>
		</li>
		<?php endif; // $resume_page ?>
		<?php if ( $contact_page ) : ?>
		<li>
			<h3><?php _e( 'Contact', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'grande-design' ); ?></a>
			</p>
		</li>
		<?php endif; // $contact_page ?>
		<li>
			<h3><?php _e( 'Front Page', 'grande-design' ); ?></h3>
			<div class="grande-dashboard-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Display', 'grande-design' ); ?></a>
			</p>
		</li>
	</ul>
</div>

<?php
/**
 * Custom development hook.
 *
 * @since 1.0.0
 */
do_action( 'grande_dashboard' );
