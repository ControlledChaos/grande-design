<?php
/**
 * About page media options output.
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
<h2><?php _e( 'Media and Upload Options', 'grande-design' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'grande-design' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'grande-design' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'grande-design' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'grande-design' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'grande-design' ); ?></h3>