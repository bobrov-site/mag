<?php
$image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);

$slider_imgs = carbon_get_post_meta(get_the_ID(), 'crb_slider');
$product_chars = carbon_get_post_meta(get_the_ID(), 'crb_characteristics');
$files = carbon_get_post_meta(get_the_ID(), 'crb_file');
$url_file = wp_get_attachment_url($files);
?>
<section class="product">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-md-7 col-lg-7">
                <div class="product-images">
                    <div class="product-img d-flex justify-content-center">
                        <a data-fancybox="gallery" href="<?php echo get_the_post_thumbnail_url('', 'full') ?>">
                            <img class="lazyload wow fadeInLeft" data-src="<?php echo get_the_post_thumbnail_url('', 'product-thumb') ?>" alt="<?php echo $image_title?>">
                        </a>
                    </div>
                    <div class="product-slider">
                        <div class="product-img-swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($slider_imgs as $img) { ?>
	                                <?php if ($img['crb_image'] !== ''): ?>
                                    <?php
		                                $src = wp_get_attachment_image_src($img['crb_image'], 'product-thumb');
                                        ?>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" href="<?php echo wp_get_attachment_url($img['crb_image'])  ?>">
                                        <img class="lazyload wow fadeIn" data-src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title($img['crb_image']) ?>">
                                    </a>
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
			<div class="col-xl-5 col-md-5 col-lg-5">
				<div class="product-info">
                    <?php if($product_chars): ?>
					<div class="product-info-item">
						<div class="product-info-header wow fadeInDown d-flex align-items-center">
							<img class="product-info-item-icon lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/info.svg' ?>" alt="info">
							<h3 class="product-info-header-title">
								Характеристики:
							</h3>
						</div>
						<div class="product-info-item-chars wow fadeInDown">
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
                    <?php endif; ?>
					<?php if (get_the_content()) : ?>
                    <div class="product-info-item wow fadeInDown">
                        <div class="product-info-header d-flex align-items-center">
                            <img class="product-info-item-icon lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/file.svg' ?>" alt="info">
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
					<?php endif; ?>
					<?php if ($files !== '') : ?>
                    <div class="product-info-item wow fadeInDown">
                        <div class="product-info-header d-flex align-items-center">
                            <img class="product-info-header-icon lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/product-page/download.svg' ?>" alt="info">
                            <h3 class="product-info-header-title">
                                Дополнительная информация:
                            </h3>
                        </div>
                        <div class="product-info-item-link">
                            <a href="<?php echo $url_file ?>" download>Скачать коммерческое предложение</a>
                        </div>
                    </div>
                        <hr>
                    <?php endif; ?>
                    <div class="product-info-item wow fadeInDown">
                        <a class="btn btn-lg btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#priceModal">
                            Узнать цену
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Узнайте цену заполнив форму обратной связи</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
	            <?php echo do_shortcode('[forminator_form id="1304"]') ?>
            </div>
        </div>
    </div>
</div>
