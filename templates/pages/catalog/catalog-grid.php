<?php
$current_url = get_page_uri();
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
?>

<?php if (is_archive()) : ?>
<section class="catalog-grid">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-md-4 col-lg-3">
                <form class="filters-form" data-js-form="filter" action="filter" method="post">
                    <div class="catalog-grid-filters border">
                        <div class="filter-item filter-item-header d-flex align-items-center justify-content-between">
                            <h3 class="title-filters">
                                Фильтр
                            </h3>
                            <a class="filter-collapse" href="#collapseFilter" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFilter">
                                <img class="filter-icon" src="<?php echo get_template_directory_uri() . '/assets/src/svg/components/catalog/filter.svg'; ?>" alt="filter-icon">
                            </a>
                        </div>
                        <div id="collapseFilter" class="collapse">
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Поиск
                                </h4>
                                <input type="text" name="productName" class="form-control" placeholder="Введите название">
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Вид продукции
                                </h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="taxonomyProduct" value="technique" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Техника
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="taxonomyProduct" value="repairs" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
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
                                        <input type="number" name="powerFrom" class="form-control" min="65" placeholder="От 65">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="powerUntil" class="form-control" min="65" max="600" placeholder="До 600">
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Тип агрегатирования:
                                </h4>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="hinged" id="hingedCheck">
                                    <label class="form-check-label" for="hingedCheck">
                                        Навесной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="semi-hinged" id="semiHingedCheck">
                                    <label class="form-check-label" for="semiHingedCheck">
                                        Полунавесной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="trailed" id="trailedCheck">
                                    <label class="form-check-label" for="trailedCheck">
                                        Прицепной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="trailed-hydraulic" id="trailedHydraulicCheck">
                                    <label class="form-check-label" for="trailedHydraulicCheck">
                                        Прицепной гидравлический
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Тип навески трактора:
                                </h4>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="three-point" id="threePointCheck">
                                    <label class="form-check-label" for="threePointCheck">
                                        Трехточечная
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="drawbar" id="drawbarCheck">
                                    <label class="form-check-label" for="drawbarCheck">
                                        Тяговый брус
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="combine" id="combineCheck">
                                    <label class="form-check-label" for="combineCheck">
                                        Комбинированная
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Технология обработки почвы:
                                </h4>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="classic" id="classicСheck">
                                    <label class="form-check-label" for="classicСheck">
                                        Классическая обработка
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="minimal" id="minimalCheck">
                                    <label class="form-check-label" for="minimalCheck">
                                        Минимальная обработка
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="no-till" id="noTillCheck">
                                    <label class="form-check-label" for="noTillCheck">
                                        No-till
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="strip-till" id="stripTillCheck">
                                    <label class="form-check-label" for="stripTillCheck">
                                        Strip-till
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item d-grid">
                                <input type="hidden" name="action" value="filter">
                                <button class="btn btn-primary" type="submit">
                                    Найти
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
			</div>
			<div class="col-xl-9 col-md-8 col-lg-9">
				<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-3 gy-4 g-sm-4" data-js-filter="target">
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
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'square') ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
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
<?php endif; ?>
<?php if (is_page()) : ?>
<section class="catalog-grid">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4 col-lg-3">
                <form class="filters-form" data-js-form="filter" action="filter" method="post">
                    <div class="catalog-grid-filters border">
                        <div class="filter-item filter-item-header d-flex align-items-center justify-content-between">
                            <h3 class="title-filters">
                                Фильтр
                            </h3>
                            <a class="filter-collapse" href="#collapseFilter" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFilter">
                                <img class="filter-icon" src="<?php echo get_template_directory_uri() . '/assets/src/svg/components/catalog/filter.svg'; ?>" alt="filter-icon">
                            </a>
                        </div>
                        <div id="collapseFilter" class="collapse">
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Поиск
                                </h4>
                                <input type="text" name="productName" class="form-control" placeholder="Введите название">
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Вид продукции
                                </h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="taxonomyProduct" value="technique" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Техника
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="taxonomyProduct" value="repairs" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
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
                                        <input type="number" name="powerFrom" class="form-control" min="65" placeholder="От 65">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="powerUntil" class="form-control" min="65" max="600" placeholder="До 600">
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Тип агрегатирования:
                                </h4>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="hinged" id="hingedCheck">
                                    <label class="form-check-label" for="hingedCheck">
                                        Навесной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="semi-hinged" id="semiHingedCheck">
                                    <label class="form-check-label" for="semiHingedCheck">
                                        Полунавесной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="trailed" id="trailedCheck">
                                    <label class="form-check-label" for="trailedCheck">
                                        Прицепной
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input aggregationType-check" name="AggregationType[]" type="checkbox" value="trailed-hydraulic" id="trailedHydraulicCheck">
                                    <label class="form-check-label" for="trailedHydraulicCheck">
                                        Прицепной гидравлический
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Тип навески трактора:
                                </h4>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="three-point" id="threePointCheck">
                                    <label class="form-check-label" for="threePointCheck">
                                        Трехточечная
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="drawbar" id="drawbarCheck">
                                    <label class="form-check-label" for="drawbarCheck">
                                        Тяговый брус
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="hitch-type[]" class="form-check-input" type="checkbox" value="combine" id="combineCheck">
                                    <label class="form-check-label" for="combineCheck">
                                        Комбинированная
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h4 class="filter-item-title">
                                    Технология обработки почвы:
                                </h4>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="classic" id="classicСheck">
                                    <label class="form-check-label" for="classicСheck">
                                        Классическая обработка
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="minimal" id="minimalCheck">
                                    <label class="form-check-label" for="minimalCheck">
                                        Минимальная обработка
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="no-till" id="noTillCheck">
                                    <label class="form-check-label" for="noTillCheck">
                                        No-till
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="processing-technology[]" class="form-check-input" type="checkbox" value="strip-till" id="stripTillCheck">
                                    <label class="form-check-label" for="stripTillCheck">
                                        Strip-till
                                    </label>
                                </div>
                            </div>
                            <div class="filter-item d-grid">
                                <input type="hidden" name="action" value="filter">
                                <button class="btn btn-primary" type="submit">
                                    Найти
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-9 col-md-8 col-lg-9">
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-3 gy-4 g-sm-4" data-js-filter="target">
					<?php
                    $key_developer = array(
	                    'key' => 'crb_developer',
	                    'value' => 'MAG',
                    );
					$mypost = array(
						'post_type' => 'product',
						'posts_per_page' => 9,
						'paged' => $paged,
						'meta_query' => [
							'relation' => 'AND',
                            $key_developer
						]

					);
					$loop = new WP_Query( $mypost ); ?>
					<?php if ($loop->have_posts()) ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php
						$developer = carbon_get_post_meta(get_the_ID(), 'crb_developer');
						?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
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
<?php endif; ?>
