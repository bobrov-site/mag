<?php
$mypost = array(
	'post_type' => 'sections',
	'posts_per_page' => '1',
    'title' => 'Преимущества'
);
$loop = new WP_Query( $mypost ); ?>
<?php if ($loop->have_posts()) ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
$image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

$image_title = get_the_title($image_id);
?>
<section class="benefits">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="brick wow fadeInDown"></div>
				<h2 class="title-section">Преимущества покупки продукции у ООО “МАГ”</h2>
			</div>
		</div>
        <div class="row flex-column-reverse flex-xl-row d-flex">
            <div class="col-xl-6">
                <div class="benefits-list">
                    <div class="row">
                        <div class="col-md-6 col-xl-6">
                            <div class="benefit">
                                <img class="benefit-icon lazyload" alt="" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/benefits/headphones.svg' ?>">
                                <h3 class="benefit-title">
                                    Тех. поддержка 24/7
                                </h3>
                                <p class="benefit-desc">
                                    Большая команда инженеров и молодых
                                    специалистов ответят на все ваши вопросы
                                    по технике.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="benefit">
                                <img class="benefit-icon lazyload" alt="" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/benefits/handshake.svg' ?>">
                                <h3 class="benefit-title">
                                    Всегда идем навстречу клиенту
                                </h3>
                                <p class="benefit-desc">
                                    Наша компания подстраивается по индивидуальные потребности фермеров за получением идеального орудия для хозяйства и развития бизнеса клиента.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-6">
                            <div class="benefit">
                                <img class="benefit-icon lazyload" alt="" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/benefits/checkbox.svg' ?>">
                                <h3 class="benefit-title">
                                    Инновационные решения
                                </h3>
                                <p class="benefit-desc">
                                    Произведенные нами орудия отвечают всем требованиям современного фермера и становятся новым почвообрабатывающим трендом. 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="benefit">
                                <img class="benefit-icon lazyload" alt="" data-src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/benefits/gear.svg' ?>">
                                <h3 class="benefit-title">
                                    Собственное производство в городе Ставрополь
                                </h3>
                                <p class="benefit-desc">
                                    Производственная площадь в г. Ставрополь и два прогрессивных орудия собственного производства: универсальный культиватор Termet и борона-мотыга ротационная Rubble.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo get_permalink(17) ?>" class="btn btn-primary btn-lg">
                    Перейти в каталог
                </a>
            </div>
            <div class="col-xl-6 d-flex justify-content-end">
                <div class="benefits-img">
                    <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url('', array(451, 502)) ?>" alt="<?php echo $image_title ?>">
                </div>
            </div>
        </div>
	</div>
</section>
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>