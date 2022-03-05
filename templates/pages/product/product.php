<?php
$image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);

$slider_imgs = carbon_get_post_meta(get_the_ID(), 'crb_slider');
$product_chars = carbon_get_post_meta(get_the_ID(), 'crb_characteristics');
$files = carbon_get_post_meta(get_the_ID(), 'crb_file');
?>
<section class="product">
	<div class="container">
		<div class="row">
			<div class="col-xl-7">
                <div class="product-images">
                    <div class="product-img d-flex justify-content-center">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo $image_title?>">
                    </div>
                    <div class="product-slider">
                        <div class="product-img-swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($slider_imgs as $img) { ?>
	                                <?php if ($img['crb_image'] !== ''): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo wp_get_attachment_url($img['crb_image'])  ?>" alt="<?php echo get_the_title($img['crb_image']) ?>">
                                </div>
                                    <?php endif; ?>
                                <?php } ?>
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
                            <?php foreach ($product_chars as $char) { ?>
                            <div class="row">
                                <div class="col-6">
                                    <p class="product-info-item-chars-title">
                                        <?php echo $char['crb_name'] ?>
                                    </p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="product-info-item-chars-value">
                                        <?php echo $char['crb_value'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
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
					<?php if ($files !== '') : ?>
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
                    <?php endif; ?>
                    <hr>
                    <div class="product-info-item">
                        <a class="btn btn-lg btn-primary" href="#">
                            Узнать цену
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
