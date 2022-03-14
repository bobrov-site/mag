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

	$powerFrom = $_POST['powerFrom'];
	$powerUntil = $_POST['powerUntil'];

	$aggregationType = $_POST['AggregationType'];

	$hitchType = $_POST['hitch-type'];

	$processingTech = $_POST['processing-technology'];


	$current_url = get_page_uri();
	$paged       = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $terms = get_terms($taxonomy);

	if (!empty($powerFrom) or !empty($powerUntil)) {
		$key_power = array(
			'key' => 'crb_power',
			'value' => array($powerFrom, $powerUntil),
            'compare' => 'BETWEEN'
		);
	}
	else {
		$key_power = array(
			'key' => 'crb_power',
			'compare' => 'EXISTS',
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

	$args = array(
		'post_type' => 'product',
		'posts_per_archive_page' => 9,
		'paged' => $paged,
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
            $key_power
		]


	); ?>

	<?php $loop = new WP_Query( $args ); ?>

	<?php if ($loop->have_posts()) {  ?>
		<?php while ( $loop->have_posts()) : $loop->the_post(); ?>
			<?php
			$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer'); ?>
            <div class="col">
                <div class="card <?php if ($developer == 'MAG'){  echo 'card-our-product'; } ?> h-100">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
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
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	<?php }
	else {
		?>
        <h2 class="title-section">
            Товаров не найдено! Укажите другие фильтры
        </h2>
		<?php
	}
	?>

	<?php
	die();

}

function _add_stylesheets() {
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');
