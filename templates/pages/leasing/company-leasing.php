<section class="company-leasing">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick wow fadeInDown"></div>
				<h2 class="title-section wow fadeInDown">
                    Мы работаем с лизинговыми компаниями:
                </h2>
			</div>
		</div>
        <div class="row">
            <div class="col-xl-8 col-md-12 col-lg-8">
                <div class="border">
                    <div class="row g-3">
	                    <?php
	                    $mypost = array(
		                    'post_type' => 'partners',
                            'order' => 'ASC',
		                    'tax_query' => array(
			                    array(
				                    'taxonomy' => 'partners_categories',
				                    'field' => 'slug',
				                    'terms' => 'lizing'
			                    ),
		                    ),
	                    );
	                    $loop = new WP_Query( $mypost ); ?>
	                    <?php if ($loop->have_posts()) ?>
	                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-xl-6 col-md-6 col-lg-6 d-flex justify-content-center">
	                        <?php
	                        $image_id = get_post_thumbnail_id();

	                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

	                        $image_title = get_the_title($image_id);
	                        ?>
                            <img class="company-logo wow fadeIn" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo $image_title ?>">
                        </div>
		                    <?php wp_reset_postdata(); ?>
	                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>