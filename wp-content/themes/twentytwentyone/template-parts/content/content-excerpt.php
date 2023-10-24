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

// var_dump($post);
?>

<div class="wrap-post entry-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row ">
			<div class="col-md-5 w-mb-100">
				<div class="top_news_block_thumb">
					<?php
					// $image_id = get_post_thumbnail_id();
					// if ($image_id) {
					// 	$image_url = wp_get_attachment_image_url($image_id, 'full');
					// 	echo '<img src="' . $image_url . '">';
					// }
					//?>
					<img src="http://fit.tdc.edu.vn/files/large/6ba9ad9cf9430f7862e80d77fe2b0fe3.jpg">
				</div>
			</div>
			<div class="col-md-7 top_news_block_desc w-mb-100">
				<div class="row">
					<div class="col-3 topnewstime">
						<span class="topnewsdate"><?php echo $post_date ?></span><br>
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
</div>


<!-- <footer class="entry-footer default-max-width">
			<?php //twenty_twenty_one_entry_meta_footer(); 
			?>
		</footer> -->
<!-- .entry-footer -->

</article><!-- #post-${ID} -->
</div>