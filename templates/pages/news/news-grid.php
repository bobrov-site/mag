<section class="news-grid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php
                //параметры
                $posts = get_posts(array(
	                'post_type' => 'news',
	                'suppress_filters' => true,
                ));
                ?>
	            <?php get_sidebar('news') ?>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php
            foreach ($posts as $post){
                setup_postdata($post);
	            //формат вывода the_title()...
                $img_id = get_post_thumbnail_id();
                $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', TRUE);
                ?>
                <div class="col">
                    <div class="card h-100" id="<?php the_ID(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo $img_alt ; ?>">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php the_title() ?>
                            </h3>
                            <p class="card-text"><?php the_date(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();//сброс
            ?>
        </div>
    </div>
</section>
