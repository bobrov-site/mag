<section class="dealers">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick wow fadeInDown"></div>
				<h2 class="title-section wow fadeInDown">
					Наши официальные дилеры
				</h2>
			</div>
		</div>
		<div class="d-none d-lg-flex row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
			<?php
			$mypost = array(
				'post_type' => 'partners',
				'order' => 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'partners_categories',
						'field' => 'slug',
						'terms' => 'dilery'
					),
				),
			);
			$loop = new WP_Query( $mypost ); ?>
			<?php if ($loop->have_posts()) ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col">
                <div class="card h-100 wow fadeIn">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php the_title() ?>
                        </h4>
                        <p class="card-text">
                            <?php the_field('address'); ?>
                        </p>
                        <?php if (get_field('number')): ?>
                            <div class="card-number">
                                <a class="card-number-link" href="tel:<?php the_field('number'); ?>">
			                        <?php the_field('number'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('link')):?>
                        <a class="btn btn-primary" href="<?php the_field('link'); ?>">Перейти на сайт дилера</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
		</div>
        <div class="d-flex d-lg-none row overflow-hidden">
            <div class="col-xl-12">
                <div class="dealers-swiper">
                    <div class="swiper-wrapper">
	                    <?php if ($loop->have_posts()) ?>
	                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="swiper-slide card h-100 wow fadeIn">
                            <div class="card-body">
                                <h4 class="card-title">
			                        <?php the_title() ?>
                                </h4>
                                <p class="card-text">
			                        <?php the_field('address'); ?>
                                </p>
		                        <?php if (get_field('number')): ?>
                                    <div class="card-number">
                                        <a class="card-number-link" href="tel:<?php the_field('number'); ?>">
					                        <?php the_field('number'); ?>
                                        </a>
                                    </div>
		                        <?php endif; ?>
		                        <?php if(get_field('link')):?>
                                    <a class="btn btn-primary" href="<?php the_field('link'); ?>">Перейти на сайт дилера</a>
		                        <?php endif; ?>
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
        <div class="row">
            <div class="col-xl-3">
                <div class="become-dealer-link wow fadeInLeft">
                    <a class="btn btn-primary btn-lg" href="#dealers-blank">
                        Стать дилером
                    </a>
                </div>
            </div>
        </div>
	</div>
</section>
