<?php
$benefits = carbon_get_post_meta(get_the_ID(), 'crb_benefits');
$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer');
?>
<?php if ($developer == 'MAG') : ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="brick"></div>
            <h2 class="title-section">
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
                    <div class="row">
                        <div class="col-xl-5 d-flex align-items-center">
                            <div class="benefits-product-offer">
                                <h2 class="title-section">
                                    <?php echo $benefit['crb_title'] ?>
                                </h2>
                                <p class="desc-section">
                                    <?php echo $benefit['crb_desc'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-7 d-flex">
                            <img class="benefits-product-img" src="<?php echo wp_get_attachment_url($benefit['crb_image'])  ?>" alt="<?php echo get_the_title($benefit['crb_image']) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php endif; ?>