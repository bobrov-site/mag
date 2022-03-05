<?php
$products = carbon_get_post_meta(get_the_ID(), 'crb_association')
?>
<section class="buy-with-product">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="brick"></div>
				<h2 class="title-section">
					С этим товаром покупают:
				</h2>
			</div>
		</div>
        <?php var_dump($products); ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
			<?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo get_template_directory_uri() . '/assets/dist/img/components/popular-products/Example-card.png' ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                Культиватор Tёrmet 12000
                            </h3>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="btn btn-primary">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
			<?php }?>
        </div>
	</div>
</section>