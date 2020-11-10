<?php
/**
 * Dev tools page output.
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

// Slug for which to look.
$slug = 'settings';

// Stop here if the slug is not found.
if ( ! $slug ) {
	return;
}

// Post query arguments.
$args = [
	'name'           => $slug,
	'post_type'      => [ 'website_help' ],
	'post_status'    => [ 'publish' ],
	'posts_per_page' => 1,
	'perm'           => 'edit_posts'
];

// New instance of the WP_Query class.
$query = new \WP_Query( $args );

// Loop the post and display content.
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>

<?php

// End the loop.
endwhile; endif;
