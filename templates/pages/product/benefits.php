<?php
$benefits = carbon_get_post_meta(get_the_ID(), 'crb_benefits');
$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer');
?>
<?php if ($benefits) : ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="brick wow fadeInDown"></div>
            <h2 class="title-section wow fadeInDown">
                Преимущества нашего продукта:
            </h2>
        </div>
    </div>
</div>
<?php foreach ($benefits as $benefit) { ?>
<section class="benefits-product">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="benefits-product-box">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-xl-5 col-md-5 col-lg-5 d-flex align-items-center">
                            <div class="benefits-product-offer wow fadeInDown">
                                <h2 class="title-section">
                                    <?php echo $benefit['crb_title'] ?>
                                </h2>
                                <p class="desc-section">
                                    <?php echo $benefit['crb_desc'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7 col-lg-7 d-flex align-items-center">
                            <?php $src = wp_get_attachment_image_src($benefit['crb_image'], 'hd'); ?>
                            <img class="benefits-product-img lazyload wow fadeInDown" data-src="<?php echo $src[0];  ?>" alt="<?php echo get_the_title($benefit['crb_image']) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php endif; ?>