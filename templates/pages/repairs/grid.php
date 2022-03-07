<?php
$args = [
	'taxonomy'      => [ 'repairs'], // название таксономии с WP 4.5
	'orderby'       => 'id',
	'order'         => 'ASC',
	'hide_empty'    => true,
	'object_ids'    => null,
	'include'       => array(),
	'exclude'       => array(),
	'exclude_tree'  => array(),
	'number'        => '',
	'fields'        => 'all',
	'count'         => false,
	'slug'          => '',
	'parent'         => '',
	'hierarchical'  => true,
	'child_of'      => 0,
	'get'           => '', // ставим all чтобы получить все термины
	'name__like'    => '',
	'pad_counts'    => false,
	'offset'        => '',
	'search'        => '',
	'cache_domain'  => 'core',
	'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
	'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
	'update_term_meta_cache' => true, // подгружать метаданные в кэш
	'meta_query'    => '',
];

$terms = get_terms( $args );
?>
<section class="product-archive-grid">
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            foreach( $terms as $term ){
            ?>
				<div class="col">
					<div class="card h-100">
                        <?php
                        $imgField = carbon_get_term_meta($term->term_id, 'crb_image');
                        ?>
						<img src="<?php echo wp_get_attachment_url($imgField)  ?>" class="card-img-top" alt="<?php echo get_the_title($imgField) ?>">
						<div class="card-body">
							<h3 class="card-title">
								<?php echo $term->name ?>
							</h3>
							<a class="btn btn-primary" href="<?php echo get_term_link($term->term_id); ?>">
								Подробнее
							</a>
						</div>
					</div>
				</div>
            <?php } ?>
		</div>
	</div>
</section>
