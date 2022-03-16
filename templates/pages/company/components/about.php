<section class="catalog-about">
	<div class="container">
		<div class="row flex-column-reverse flex-md-row">
			<div class="col-xl-5 col-md-5 col-lg-5 d-flex align-items-center">
				<div class="catalog-about-offer">
                    <h2 class="title-section">
                        <?php the_field('title'); ?>
                    </h2>
                    <p class="desc-section">
                        <?php the_field('desc'); ?>
                    </p>
                    <a href="<?php echo home_url('/') . get_page_uri( 17 ) ?>" class="btn btn-primary btn-lg">
                        Перейти в каталог
                    </a>
                </div>
			</div>
			<div class="col-xl-7 col-md-6 col-lg-7 d-flex justify-content-end">
				<div class="catalog-about-img">
					<img src="<?php the_field('img');?>" alt="catalog">
					<div class="catalog-about-img-bg"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="feedback-about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 d-flex">
                <div class="catalog-about-img">
                    <img src="<?php the_field('img-f')?>" alt="feedback">
                    <div class="catalog-about-img-bg"></div>
                </div>
            </div>
            <div class="col-xl-6 col-md-5 col-lg-6 d-flex align-items-center">
                <div class="catalog-about-offer">
                    <h2 class="title-section">
                        <?php the_field('title-f'); ?>
                    </h2>
                    <p class="desc-section">
                        <?php the_field('desc-f'); ?>
                    </p>
                    <a href="#feedbacks" class="btn btn-primary btn-lg">
                        Посмотреть отзывы
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
