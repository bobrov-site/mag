<?php
$mypost = array(
	'post_type' => 'sections',
	'posts_per_page' => '1',
	'title' => 'Популярная продукция'
);
$loop = new WP_Query( $mypost ); ?>
<?php if ($loop->have_posts()) ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
$products = carbon_get_post_meta(get_the_ID(), 'crb_association');
?>
<section id="popular-products" class="popular-products">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brick"></div>
                <h2 class="title-section">
                    Популярная продукция
                </h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <?php foreach ($products as $product) { ?>
                    <?php
                $developer = carbon_get_post_meta($product['id'], 'crb_developer');
                ?>
            <div class="col">
                <div class="card <?php if ($developer == 'MAG'){ echo 'card-our-product'; } ?> h-100">
                    <img src="<?php echo get_the_post_thumbnail_url($product['id']) ?>" class="card-img-top" alt="<?php echo wp_get_attachment_url( $product['id'] ) ?>">
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
            <?php } ?>
        </div>
    </div>
</section>
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>