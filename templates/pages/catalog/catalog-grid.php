<?php
$current_url = get_page_uri();
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
?>
<section class="catalog-grid">
	<div class="container">
		<div class="row">
			<div class="col-xl-3">
                <div class="catalog-grid-filters border">
                    <h3 class="title-filters">
                        Фильтр
                    </h3>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Вид продукции
                        </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Техника
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Запчасти
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Мощность трактора, л.с
                        </h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="От 65">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="До 600">
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Вид продукции
                        </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Техника
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Запчасти
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Вид продукции
                        </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Техника
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Запчасти
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Вид продукции
                        </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Техника
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Запчасти
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4 class="filter-item-title">
                            Вид продукции
                        </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Техника
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Запчасти
                            </label>
                        </div>
                    </div>
                    <hr>
                    <h3 class="title-filters">
                        Категории
                    </h3>
                    <div class="filter-item">
                        <div class="input-group">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                    <div class="filter-item d-flex">
                        <div class="category-item">
                            Рабл <span class="category-item-count"> (1300) </span>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-xl-9">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
					<?php
					$mypost = array(
						'post_type' => 'product',
						'posts_per_page' => 9,
						'paged' => $paged,

					);
					$loop = new WP_Query( $mypost ); ?>
					<?php if ($loop->have_posts()) ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php
						$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer');
                        ?>
					<div class="col">
						<div class="card <?php if ($developer == 'MAG'){ echo 'card-our-product'; } ?> h-100">
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
				</div>
                <div class="row">
                    <div class="col-xl-12 d-flex justify-content-end">
                        <div class="pagination-archive">
							<?php
							$args = array(
								'prev_next' => false,
							);
							?>
							<?php  the_posts_pagination($args); ?>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
