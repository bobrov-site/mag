<?php
$current_url = get_page_uri();
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
?>
<section class="product-archive-grid">
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
			<?php
			$mypost = array(
				'post_type' => 'product',
				'posts_per_archive_page' => 9,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'repairs',
						'field' => 'name',
						'terms' => single_term_title('', false)
					),
				),

			);
			$loop = new WP_Query( $mypost ); ?>
			<?php if ($loop->have_posts()) ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col">
					<div class="card h-100">
						<?php
						$image_id = get_post_thumbnail_id();

						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

						$image_title = get_the_title($image_id);
						?>
						<img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo $image_title ?>">
						<div class="card-body">
							<h3 class="card-title">
								<?php the_title() ?>
							</h3>
							<p class="card-text"><?php echo get_the_excerpt() ?></p>
							<a class="btn btn-primary" href="<?php the_permalink(); ?>">
								Подробнее
							</a>
						</div>
					</div>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
		</div>
		<div class="row">
			<div class="col-xl-12 d-flex justify-content-end">
				<div class="pagination-archive">
					<?php
					$args = array(
						'prev_next' => false,
					);
					?>
					<?php  the_posts_pagination($args); ?>
				</div>
			</div>
		</div>
	</div>
</section>