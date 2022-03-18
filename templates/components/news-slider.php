<section class="news-slider">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick"></div>
				<h2 class="title-section">
					Новости
				</h2>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="news-swiper ">
                    <div class="swiper-wrapper">
	                    <?php
	                    $mypost = array(
		                    'post_type' => 'news',
		                    'posts_per_page' => '9'
	                    );
	                    $loop = new WP_Query( $mypost ); ?>
	                    <?php if ($loop->have_posts()) ?>
	                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="swiper-slide card">
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
                                <p class="card-text"><?php echo get_the_date() ?></p>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">
                                    Подробнее
                                </a>
                            </div>
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