<?php

function _add_javascript() {
	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/dist/js/main.js', array('jquery'), null, true );
	wp_localize_script('theme', 'ajaxFilter', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
	));
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);

add_action('wp_ajax_filter', 'filterAjax');
add_action('wp_ajax_nopriv_filter', 'filterAjax');

function filterAjax () {

	//values from ajax filters

	$taxonomy = $_POST['taxonomyProduct'];
	$powerFrom = intval($_POST['powerFrom']);
	$powerUntil = intval($_POST['powerUntil']);
	$aggregationType = $_POST['AggregationType'];
	$hitchType = $_POST['hitch-type'];
	$processingTech = $_POST['processing-technology'];
    $productName = $_POST['productName'];
    $catalogName = $_POST['catalog'];


	$current_url = get_page_uri();
	$paged       = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $terms = get_terms($taxonomy);

	if (!empty($powerFrom) and !empty($powerUntil)) {
		$key_power = array(
			'key' => 'crb_power',
			'value' => array($powerFrom, $powerUntil),
			'type'    => 'numeric',
            'compare' => 'BETWEEN'
		);
	}
	else {
		$key_power = array(
			'key' => 'crb_power',
            'value' => array(65, 600),
			'type'    => 'numeric',
			'compare' => 'BETWEEN',
		);
	}

    if (!empty($aggregationType)) {
        $key_aggregation = array(
	        'key' => 'crb_aggregationtype',
	        'value' => $aggregationType,
        );
    }
    else {
        $key_aggregation = array(
	        'key' => 'crb_aggregationtype',
            'compare' => 'EXISTS',
        );
    }

	if (!empty($hitchType)) {
		$key_hitchtype = array(
			'key' => 'crb_hitchtype',
			'value' => $hitchType,
		);
	}
	else {
		$key_hitchtype = array(
			'key' => 'crb_hitchtype',
			'compare' => 'EXISTS',
		);
	}

	if (!empty($processingTech)) {
		$key_processingtech = array(
			'key' => 'crb_processingtechnology',
			'value' => $processingTech,
		);
	}
	else {
		$key_processingtech = array(
			'key' => 'crb_processingtechnology',
			'compare' => 'EXISTS',
		);
	}

    if(!empty($catalogName)) {
        $key_developer = array(
          'key' => 'crb_developer',
          'value' => $catalogName,
        );
    }
    else {
        $key_developer = array(
                'key' => 'crb_developer',
                'compare' => 'EXISTS',
        );
    }

	$args = array(
		'post_type' => 'product',
		'posts_per_archive_page' => 9,
		'paged' => $paged,
		'search_prod_title' => $productName,
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'slug',
				'terms' => wp_list_pluck($terms, 'slug'),
			),
		),
		'meta_query' => [
			'relation' => 'AND',
			$key_aggregation,
			$key_hitchtype,
			$key_processingtech,
			$key_power,
            $key_developer,
		]


	);
	add_filter( 'posts_where', 'title_filter', 10, 2 ); //filter by title post
	?>

	<?php $loop = new WP_Query( $args ); ?>

	<?php if ($loop->have_posts()) {  ?>
		<?php while ( $loop->have_posts()) : $loop->the_post(); ?>
			<?php
			$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer'); ?>
            <div class="col">
                <?php // this loop for catalog-page ?>
                <?php if (empty($catalogName)): ?>
                <div class="card <?php if ($developer == 'MAG'){  echo 'card-our-product'; } ?> h-100">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'card') ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
                    <div class="card-body">
                        <h3 class="card-title">
							<?php echo get_the_title(get_the_ID()) ?>
                        </h3>
                        <p class="card-text"><?php echo get_the_excerpt(get_the_ID()) ?></p>
                        <a class="btn <?php if ($developer == 'MAG'){ echo 'btn-secondary'; } else { echo 'btn-primary'; }; ?>" href="<?php echo get_the_permalink(get_the_ID()) ?>">
                            Подробнее
                        </a>
                    </div>
                </div>
                <?php endif; ?>
	            <?php // this loop for production-page ?>
                <?php if (!empty($catalogName)):  ?>
                <div class="card h-100">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'card') ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
                    <div class="card-body">
                        <h3 class="card-title">
				            <?php echo get_the_title(get_the_ID()) ?>
                        </h3>
                        <p class="card-text"><?php echo get_the_excerpt(get_the_ID()) ?></p>
                        <a class="btn btn-primary" href="<?php echo get_the_permalink(get_the_ID()) ?>">
                            Подробнее
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	<?php }
	else {
		?>
            <div class="col">
                <h2 class="title-section">
                    Товаров не найдено! Укажите другие фильтры
                </h2>
            </div>
		<?php
	}
	?>

	<?php
	remove_filter( 'posts_where', 'title_filter', 10, 2 ); //because this loop it's deleted in the end
	wp_die();

}

function _add_stylesheets() {
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');
