<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content/content-single');

	if (is_attachment()) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
			)
		);
	}



	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');

	$twentytwentyone_next_label     = esc_html__('Next post', 'twentytwentyone');
	$twentytwentyone_previous_label = esc_html__('Previous post', 'twentytwentyone');

	$prev_post = get_previous_post();
	$prev_post_date = '';
	$prev_post_month = '';
	$prev_post_year = '';

	if ($prev_post) {
		$prev_post_date = get_the_date('d', $prev_post->ID);
		$prev_post_month = get_the_date('m', $prev_post->ID);
		$prev_post_year = get_the_date('y', $prev_post->ID);
	}

	$next_post = get_next_post();
	$next_post_date = '';
	$next_post_month = '';
	$next_post_year = '';

	if ($next_post) {
		$next_post_date = get_the_date('d', $next_post->ID);
		$next_post_month = get_the_date('m', $next_post->ID);
		$next_post_year = get_the_date('y', $next_post->ID);
	}

	the_post_navigation(
		array(
			'next_text' => '
				<div class="date-right d-flex">
					<div class="headlinesdate d-flex">
						<div class="headlinesdm">
							<div class="headlinesday">' . $next_post_date . '</div>
							<div class="headlinesmonth">' . $next_post_month . '</div>
						</div>
						<div class="headlinesyear">' . $next_post_year . '</div>
					</div>
					<div class="headlinestitle">
						<p class="post-title">%title</p>
					</div>
				</div>',
			'prev_text' => '
				<div class="date-left d-flex">
					<div class="headlinesdate d-flex">
						<div class="headlinesdm">
							<div class="headlinesday">' . $prev_post_date . '</div>
							<div class="headlinesmonth">' . $prev_post_month  . '</div>
						</div>
						<div class="headlinesyear">' . $prev_post_year . '</div>
					</div>
					<div class="headlinestitle">
						<p class="post-title">%title</p>
					</div>
				</div>',
		)
	);

	// the_post_navigation(
	// 	array(
	// 		'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
	// 		'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
	// 	)
	// );

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) {
		comments_template();
	}

endwhile; // End of the loop.

get_footer();
