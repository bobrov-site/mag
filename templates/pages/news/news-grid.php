<?php
$current_url = get_page_uri();
?>
<section class="news-grid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="categories">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($current_url == 'novosti') { echo 'active'; } ?>" aria-current="page" href="<?php echo get_page_link('19') ?>">Все</a>
                        </li>
	                    <?php
	                    $categories = get_categories([
		                    'taxonomy' => 'news_categories',
		                    'type' => 'news',
	                    ]);
	                    if ($categories) {
		                    foreach ($categories as $category) {
                                $title_page = single_term_title('', false)
			                    ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($category->name == $title_page  ) {echo 'active'; } ?>" href="<?php echo get_term_link($category->term_id) ?>"><?php echo $category->name ?></a>
                                </li>
                                <?php
		                    }
	                    }
	                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            $mypost = array(
	            'post_type' => 'news',
                'posts_per_page' => '9'
            );
            $loop = new WP_Query( $mypost ); ?>
	        <?php if ($loop->have_posts()) ?>
	        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col">
                <div class="card h-100">
		            <?php
		            $image_id = get_post_thumbnail_id();

		            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

		            $image_title = get_the_title($image_id);
		            ?>
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo $image_title ?>">
                    <div class="card-body">
                        <h3 class="card-title">
				            <?php the_title() ?>
                        </h3>
                        <p class="card-text"><?php the_date(); ?></p>
                        <a class="btn btn-primary" href="<?php the_permalink(); ?>">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
		        <?php wp_reset_postdata(); ?>
	        <?php endwhile; ?>
        </div>
    </div>
</section>
