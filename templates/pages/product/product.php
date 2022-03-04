<section class="product">
	<div class="container">
		<div class="row">
			<div class="col-xl-7">
                <div class="product-images">
                    <div class="product-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/src/img/pages/product/example.png' ?>" alt="">
                    </div>
                    <div class="product-slider">
                        <div class="product-img-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/src/img/pages/product/example.png' ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/src/img/pages/product/example.png' ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/src/img/pages/product/example.png' ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/src/img/pages/product/example.png' ?>" alt="">
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
			<div class="col-xl-5">
				<div class="product-info">
					<div class="product-info-item">
						<div class="product-info-header d-flex align-items-center">
							<img class="product-info-item-icon" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/info.svg' ?>" alt="info">
							<h3 class="product-info-header-title">
								Характеристики:
							</h3>
						</div>
						<div class="product-info-item-chars">
                            <div class="row">
                                <div class="col-6">
                                    <p class="product-info-item-chars-title">
                                        Масса
                                    </p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="product-info-item-chars-value">
                                        0.3 кг
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="product-info-item-chars-title">
                                        Масса
                                    </p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="product-info-item-chars-value">
                                        0.3 кг
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="product-info-item-chars-title">
                                        Масса
                                    </p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="product-info-item-chars-value">
                                        0.3 кг
                                    </p>
                                </div>
                            </div>
						</div>
					</div>
					<hr>
                    <div class="product-info-item">
                        <div class="product-info-header d-flex align-items-center">
                            <img class="product-info-item-icon" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/file.svg' ?>" alt="info">
                            <h3 class="product-info-header-title">
                                Описание:
                            </h3>
                        </div>
                        <div class="product-info-item-desc">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="product-info-item">
                        <div class="product-info-header d-flex align-items-center">
                            <img class="product-info-header-icon" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/download.svg' ?>" alt="info">
                            <h3 class="product-info-header-title">
                                Дополнительная информация:
                            </h3>
                        </div>
                        <div class="product-info-item-link">
                            <a href="<?php ?>" download>Скачать коммерческое предложение</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
