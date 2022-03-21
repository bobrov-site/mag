<?php
$products = carbon_get_post_meta(get_the_ID(), 'crb_association')
?>

<?php if (sizeof($products) !== 0) : ?>
<section class="buy-with-product">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick wow fadeInDown"></div>
				<h2 class="title-section wow fadeInDown">
					С этим товаром покупают:
				</h2>
			</div>
		</div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-4 g-sm-4">
			<?php foreach ($products as $product) { ?>
                    <?php $developer = carbon_get_post_meta($product['id'], 'crb_developer'); ?>
                <div class="col">
                    <div class="card h-100 <?php if ($developer == 'MAG'){ echo 'card-our-product'; } ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($product['id']) ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php echo get_the_title($product['id']) ?>
                            </h3>
                            <p class="card-text"><?php echo get_the_excerpt($product['id']) ?></p>
                            <a class="btn <?php if ($developer == 'MAG'){ echo 'btn-secondary'; } else { echo 'btn-primary'; }; ?>" href="<?php echo get_the_permalink($product['id']) ?>">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
			<?php }?>
        </div>
	</div>
</section>
<?php endif; ?>