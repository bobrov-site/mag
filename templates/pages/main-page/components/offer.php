<?php
$mypost = array(
	'post_type' => 'sections',
	'posts_per_page' => '1',
	'title' => 'Слайдер на главном экране'
);
$loop = new WP_Query( $mypost ); ?>
<?php if ($loop->have_posts()) ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
$slider = carbon_get_post_meta(get_the_ID(), 'crb_slider');
?>
<div class="hero-screen-offer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper-hero">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider as $slide) {
                            $product_id = $slide['crb_association'][0]['id']
                        ?>
                        <div class="swiper-slide">
                            <div class="row flex-column-reverse flex-xl-row">
                                <div class="col-xl-5 d-flex align-items-center">
                                    <div class="offer">
                                        <h1 class="offer-title">
                                            <?php echo $slide['crb_title']?>
                                        </h1>
                                        <p class="offer-description">
                                            <?php echo $slide['crb_desc']?>
                                        </p>
                                        <a class="btn-lg offer-link btn-primary" href="<?php echo get_permalink($product_id)?>">
                                            <?php echo $slide['crb_btn_name'] ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 d-xl-flex justify-content-xl-end justify-content-xll-end align-items-center">
                                    <div class="slider-img">
                                        <img alt="<?php get_post_meta($slide['crb_image'], '_wp_attachment_image_alt', TRUE); ?>" src="<?php echo wp_get_attachment_url($slide['crb_image'])?>">
                                        <div class="slider-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="#popular-products" class="arrow-down-link">
                    <div class="arrow-down"></div>
                </a>
            </div>
        </div>
    </div>
</div>
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>