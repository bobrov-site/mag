<?php
$mypost = array(
	'post_type' => 'sections',
	'posts_per_page' => '1',
	'title' => 'Наша продукция'
);
$loop = new WP_Query( $mypost ); ?>
<?php if ($loop->have_posts()) ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
$image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);
?>
<section class="our-products-action">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-md-7">
				<img class="our-products-action-img lazyload" data-src="<?php echo get_the_post_thumbnail_url('', 'hd') ?>" alt="<?php echo $image_title ?>">
			</div>
			<div class="col-xl-5 col-md-5 d-flex align-items-center">
				<div class="our-products-action-offer">
					<h2 class="title-section dark-section">
						Наша собственная продукция
					</h2>
					<ol class="list-offer list-group-numbered">
						<li class="offer-item">
							Современное оборудование и технологии
						</li>
						<li class="offer-item">
							Применение методов Лин на предприятии
						</li>
						<li class="offer-item">
							Опытные и высоко квалифицированные кадры
						</li>
					</ol>
					<a href="<?php echo get_permalink(29) ?>" class="btn btn-secondary btn-lg">
						Посмотреть продукцию
					</a>
				</div>
			</div>
		</div>
	</div>
    <img class="gradient-section" alt="gradient-products" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/our-products/gradient.svg'?>">
</section>
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>