<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php
$post = get_post();
$post_date = get_the_date('d', $post->ID);
$post_month = get_the_date('m', $post->ID);

$date = $post->post_date;
$day = date("j", strtotime($date));
$month = date("F", strtotime($date));

// $post_image = wp_get_attachment_image_src( $post->ID, 'full', true );
$post_image = wp_get_attachment_image_src( $post->ID, 'full', true );

?>

<div class="wrap-post entry-content" id="search_result">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row ">
			<div class="col-md-5 w-mb-100">
				<div class="top_news_block_thumb">
					<?php the_post_thumbnail( 'post-thumbnail' ); ?>
				</div>
			</div>
			<div class="col-md-7 top_news_block_desc w-mb-100">
				<div class="row">
					<div class="col-3 topnewstime">
						<span class="topnewsdate"><?php echo $post_date ?></span>
						<span class="topnewsmonth">Tháng <?php echo $post_month ?></span><br>
					</div>
					<div class="col-9 shortdesc">
						<?php get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>

						<div class="entry-content mt-0 mb-0">
							<?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
						</div><!-- .entry-content -->

					</div>

				</div>
			</div>
		</div>
	</article><!-- #post-${ID} -->
</div>
