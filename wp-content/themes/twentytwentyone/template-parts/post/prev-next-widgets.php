<?php

/**
 * Displays the prev-next-widgets widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$post = get_post();
$post_date = get_the_date('d', $post->ID);
$post_month = get_the_date('m', $post->ID);
$post_year = get_the_date('y', $post->ID);

if (is_active_sidebar('sidebar-prev-next')) : ?>

	<aside class="widget-prev-next">
		<?php dynamic_sidebar('sidebar-prev-next'); ?>
	</aside><!-- .widget-area -->

<?php
endif;
