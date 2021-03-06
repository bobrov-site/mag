<section class="certificates">
	<div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brick wow fadeInDown"></div>
                <h2 class="title-section wow fadeInDown">
                    Наши сертификаты и награды
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="certificates-swiper">
                    <div class="swiper-wrapper">
	                    <?php
	                    $mypost = array(
		                    'post_type' => 'certificates',
		                    'posts_per_page' => '9'
	                    );
	                    $loop = new WP_Query( $mypost ); ?>
	                    <?php if ($loop->have_posts()) ?>
	                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="swiper-slide">
                            <?php
	                        $image_id = get_post_thumbnail_id();

	                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

	                        $image_title = get_the_title($image_id);
                            ?>
                            <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo $image_title ?>">
                        </div>
		                    <?php wp_reset_postdata(); ?>
	                    <?php endwhile; ?>
                    </div>
                    <div class="swiper-controls w-100 d-flex justify-content-center">
                        <div class="swiper-button-prev swipers"></div>
                        <div class="swiper-button-next swipers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
