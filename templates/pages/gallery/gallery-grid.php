<?php
$arg_category = array(
	'orderby'      => 'name',
	'order'        => 'ASC',
	'taxonomy'     => 'years',
    'type' => 'gallery',
);
$categories = get_categories( $arg_category );
?>

<section class="gallery-grid">
	<?php
	if( $categories ){
		foreach( $categories as $cat ){
			$mypost = array(
				'post_type' => 'gallery',
				'tax_query' => array(
					array(
						'taxonomy' => 'years',
						'field' => 'slug',
						'terms' => $cat->slug
					),
				),
			);
			$loop = new WP_Query( $mypost ); ?>
	<?php if ($loop->have_posts()) ?>
    <div class="gallery-grid-year">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="title-section"><?php echo $cat->name; ?></h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col">
                    <div class="card h-100">
<!--                        TODO ALT-->
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
								<?php the_title() ?>
                            </h3>
                            <p class="card-text"><?php the_field('date') . the_field('year'); ?></p>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
        <?php endwhile; ?>
            </div>
        </div>
    </div>
	<?php } } ?>
</section>