<?php
$current_url = get_page_uri();
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$term = get_term_by('name', single_term_title('', false), 'technique');
?>
<section class="product-archive-grid">
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 g-sm-4">
			<?php
			$mypost = array(
				'post_type' => 'product',
				'posts_per_archive_page' => 9,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'technique',
						'field' => 'name',
						'terms' => single_term_title('', false)
					),
				),

			);
			$loop = new WP_Query( $mypost ); ?>
			<?php if ($loop->have_posts()) ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php
				$developer = carbon_get_post_meta( get_the_ID(), 'crb_developer' );
				?>
				<div class="col">
					<div class="card <?php if ($developer == 'MAG'){ echo 'card-our-product'; } ?> h-100 wow fadeIn">
						<?php
						$image_id = get_post_thumbnail_id();

						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

						$image_title = get_the_title($image_id);
						?>
						<img data-src="<?php echo get_the_post_thumbnail_url('', 'card') ?>" class="card-img-top lazyload" alt="<?php echo $image_title ?>">
						<div class="card-body">
							<h3 class="card-title">
								<?php the_title() ?>
							</h3>
                            <div class="card-links">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'technique');
                                if ($terms) {
                                    foreach ($terms as $term) {
                                        ?>
                                        <a class="card-link <?php if ($developer == 'MAG'){ echo 'link-our'; }  ?>" href="<?php echo get_term_link($term->term_id)?>"><?php echo $term->name ?></a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
							<p class="card-text"><?php echo get_the_excerpt() ?></p>
							<a class="btn <?php if ($developer == 'MAG'){ echo 'btn-secondary'; } else { echo 'btn-primary'; }; ?>" href="<?php the_permalink(); ?>">
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