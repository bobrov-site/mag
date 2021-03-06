<?php
$mypost = array(
	'post_type' => 'sections',
	'posts_per_page' => '1',
	'title' => 'Компания-действие'
);
$loop = new WP_Query( $mypost ); ?>
<?php if ($loop->have_posts()) ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
$image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);
?>
<section class="company-action">
	<div class="container">
		<div class="row flex-column-reverse flex-lg-row">
			<div class="col-12 col-lg-5 col-xl-5 d-flex align-items-center">
				<div class="company-action-offer wow wow fadeInLeft">
                    <h2 class="title-section dark-section">
                        Компания ООО «МАГ» благодарит партнеров за оказанное доверие и сотрудничество.
                    </h2>
                    <p class="company-action-desc">
                        Мы с гордостью берем на себя обязательства в развитии всей линейки продукции заводов на закрепленной территории. Также спешим отметить непревзойденное качество изготовления и используемых комплектующих мировых брендов в выпускаемой техники.
                    </p>
                    <a href="<?php echo get_permalink(27) ?>" class="btn btn-secondary btn-lg">
                        Узнать больше
                    </a>
                </div>
			</div>
			<div class="col-12 col-lg-7 col-xl-7 d-flex justify-content-lg-end">
				<img class="company-action-img lazyload wow fadeInRight" data-src="<?php echo get_the_post_thumbnail_url('', 'hd') ?>" alt="<?php echo $image_title ?>">
			</div>
		</div>
	</div>
</section>
<section class="mosh-partner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="mosh-partner-offer text-center wow fadeInDown">
                    <div class="d-flex justify-content-center">
                        <img class="mosh-logo lazyload" data-src="<?php echo get_template_directory_uri(). '/assets/src/img/components/company-action/mosh.png'?>" alt="mosh">
                    </div>
                    <p class="mosh-desc">
                        Турецкая сельскохозяйственная техника высшего класса
                    </p>
                    <a class="mosh-link" href="https://www.mosh.com.tr">
                        Перейти на сайт
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>