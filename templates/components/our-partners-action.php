<section class="our-partners-action">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick"></div>
				<h2 class="title-section">Наши партнеры</h2>
			</div>
		</div>
        <div class="row">
            <div class="col-xl-6">
                <div class="partners-offer">
                    <img class="partners-offer-img" src="<?php echo get_template_directory_uri() . '/assets/dist/img/components/our-partners/hands.png' ?>" alt="partner">
                    <h3 class="partners-offer-title">
                        Хотите стать нашим партнером?
                    </h3>
                    <p class="partners-offer-desc">
                        Оставьте заявку на нашем сайте и мы рассмотрем ваше предложение.
                    </p>
                    <a class="btn btn-primary">
                        Стать партнером
                    </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="partners-slider d-flex align-items-center justify-content-center border">
                    <div class="partners-swiper">
                        <div class="swiper-wrapper d-flex align-items-center">
	                        <?php
	                        $mypost = array(
		                        'post_type' => 'partners',
		                        'order' => 'ASC',
		                        'tax_query' => array(
			                        array(
				                        'taxonomy' => 'partners_categories',
				                        'field' => 'slug',
				                        'terms' => 'partnery'
			                        ),
		                        ),
	                        );
	                        $loop = new WP_Query( $mypost ); ?>
	                        <?php if ($loop->have_posts()) ?>
	                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="swiper-slide">
                                <?php

                                $image_id = get_post_thumbnail_id();

                                $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

                                $image_title = get_the_title( $image_id );

                                ?>
                                <img class="partners-logo" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo $image_title ?>">
                            </div>
		                        <?php wp_reset_postdata(); ?>
	                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-controls w-100 d-flex justify-content-center">
                    <div class="swiper-button-prev swipers"></div>
                    <div class="swiper-button-next swipers"></div>
                </div>
            </div>
        </div>
	</div>
</section>
