<?php
/**
 * Admin header template.
 *
 * @package    Grande_Design
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin\Partials;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Admin header variables.
 *
 * @since 1.0.0
 */

// Get the site title.
$title       = get_bloginfo( 'name' );

// Get the site tagline.
$description = get_bloginfo( 'description' );

// Return null if no site title.
if ( ! empty( $title ) ) {
    $title = get_bloginfo( 'name' );
} else {
    $title = null;
}

// Return a reminder if no site tagline.
if ( ! empty( $description ) ) {
    $description = get_bloginfo( 'description' );
} else {
    $description = __( 'Add a tagline in Settings > General or change this in', 'grande-design' ) . ' <code>grande-design/admin/partials/admin-header.php</code>';
}

// Get the admin menu registered in `class-admin-pages.php`.
$menu = 'admin-header';

// Apply filters to the variables.
$title       = apply_filters( 'ggd_admin_header_title', $title );
$description = apply_filters( 'ggd_admin_header_description', $description );
$menu        = apply_filters( 'ggd_admin_header_menu', $menu );
?>
<?php do_action( 'ggd_before_admin_header' ); ?>
<header class="ggd-admin-header">
    <?php do_action( 'ggd_before_admin_site_branding' ); ?>
    <div class="admin-site-branding">
        <p class="admin-site-title" itemprop="name"><a href="<?php echo admin_url(); ?>"><?php echo $title; ?></a></p>
        <p class="admin-site-description"><?php echo $description; ?></p>
    </div>
    <?php do_action( 'ggd_after_admin_site_branding' ); ?>
    <?php do_action( 'ggd_before_admin_navigation' ); ?>
    <nav class="admin-navigation">
        <?php wp_nav_menu(
            array(
                'theme_location'  => $menu,
                'container'       => false,
                'menu_id'         => 'admin-navigation-list',
                'menu_class'      => 'admin-navigation-list',
                'before'          => '',
                'after'           => '',
                'fallback_cb'     => ''
            )
        ); ?>
    </nav>
    <?php do_action( 'ggd_after_admin_navigation' ); ?>
</header>
<?php do_action( 'ggd_after_admin_header' ); ?>