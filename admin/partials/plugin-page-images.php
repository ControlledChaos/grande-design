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
}

?>
<h2><?php _e( 'Curating & Editing Images', 'grande-design' ); ?></h2>

<p><?php _e( '', 'grande-design' ); ?></p>
