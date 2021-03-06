<?php

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// JAVASCRIPT & CSS

include( 'configure/js-css.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}

//CARBON FIELDS

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$slider_labels = array(
		'plural_name' => 'Слайды',
		'singular_name' => 'Слайд',
	);
	$char_labels = array(
		'plural_name' => 'Характеристики',
		'singular_name' => 'Характеристику',
	);
	$benefit_labels = array(
		'plural_name' => 'Преимущества',
		'singular_name' => 'Преимущество'
	);
	$details_labels = array(
		'plural_name' => 'Точка',
		'singular_name' => 'Точки'
	);

	Container::make('post_meta', 'Слайдер')
		->where('post_id', '=', 274)
		->add_fields(array(
			Field::make('complex', 'crb_slider', __('Слайдер'))
			->setup_labels($slider_labels)
			->add_fields(array(
				Field::make('text', 'crb_title', __('Заголовок слайда')),
				Field::make('text', 'crb_desc', __('Описание оффера')),
				Field::make('text', 'crb_btn_name', __('Текст кнопки')),
				Field::make('image', 'crb_image', __('Изображение слайда')),
				Field::make('association', 'crb_association', __('Выбрать связующий товар'))
				     ->set_types(array(
					     array(
						     'post_type' => 'product',
						     'type' => 'post'
					     )
				     ))
				     ->set_max(1)
			))
		));
	Container::make('post_meta', 'Популярная продукция')
		->where('post_id', '=', 275)
		->add_fields(
			array(
				Field::make('association', 'crb_association', __('Выберите популярную продукцию'))
				     ->set_types(array(
					     array(
						     'post_type' => 'product',
						     'type' => 'post'
					     )
				     ))
					->set_min(4)
				     ->set_max(8)
			)
		);

	Container::make( 'post_meta', 'Товар' )
	         ->where( 'post_type', '=', 'product' )
		->add_tab(__('Производитель'), array(
			Field::make('select', 'crb_developer', __('Кто производитель товара?'))
			->add_options(array(
				'MAG' => __('МАГ'),
				'DEV' => __('Сторонний производитель'),
			))
		))
		->add_tab( __( 'Фотографии' ), array(
			Field::make('complex', 'crb_slider', __('Слайдер') )
				->setup_labels( $slider_labels )
			->add_fields(array(
				Field::make( 'image', 'crb_image', __( 'Изображение' ) ),
			))
		) )
		->add_tab( __( 'Характеристики' ), array(
			Field::make('complex', 'crb_characteristics', __('Характеристика') )
			     ->setup_labels( $char_labels )
			     ->add_fields(array(
				     Field::make( 'text', 'crb_name', __( 'Название Характеристики' ) ),
				     Field::make( 'text', 'crb_value', __( 'Значение Характеристики' ) ),
			     ))
		) )
		->add_tab( __( 'Дополнительная информация' ), array(
			Field::make('file', 'crb_file', __('Коммерческое предложение'))
		) )
		->add_tab(__('Фильтры'), array(
			Field::make('text', 'crb_power', __('Мощность трактора')),
			Field::make('set', 'crb_aggregationtype', __(' Тип агрегатирования: '))
				->set_options (array(
					'hinged' => __('Навесной'),
					'semi-hinged' => __('Полунавесной'),
					'trailed' => __('Прицепной'),
					'trailed-hydraulic' => __('Прицепной гидравлический')
				)),
			Field::make('set', 'crb_hitchtype', __('Тип навески трактора:'))
				->set_options (array(
					'three-point' => __('Трехточечная'),
					'drawbar' => __('Тяговый брус'),
					'combine' => __('Комбинированная'),
				)),
			Field::make('set', 'crb_processingtechnology', __('Технология обработки почты'))
				->set_options (array(
					'classic' => __('Классическая обработка'),
					'minimal' => __('Минимальная обработка'),
					'no-till' => __('No-till'),
					'strip-till' => __('Strip-till'),
				)),
		))
		->add_tab( __( 'С этим товаром покупают' ), array(
			Field::make('association', 'crb_association', __('Выбрать товары'))
			->set_types(array(
				array(
					'post_type' => 'product',
					'type' => 'post'
				)
			))
			->set_max(4)
		) )
		->add_tab(__('Обьект детально'), array(
			Field::make( 'separator', 'crb_separator_top', __( 'Главное изображение' ) ),
			Field::make('image', 'crb_bg', __('Изображение'))
				->set_conditional_logic(array(
					array(
						'field' => 'crb_developer',
						'value' => 'MAG',
						'compare' => '=',
					)
				)),
			Field::make('complex', 'crb_points', __('Детальный просмотр обьектов товара') )
			     ->set_conditional_logic(array(
				     array(
					     'field' => 'crb_developer',
					     'value' => 'MAG',
					     'compare' => '=',
				     )
			     ))
			     ->setup_labels($details_labels)
			     ->add_fields(array(
				     Field::make( 'separator', 'crb_separator_middle', __( 'Координаты точки' ) ),
				     Field::make('text' , 'crb_top', __('Точка top')),
				     Field::make('text' , 'crb_left', __('Точка left')),
				     Field::make( 'separator', 'crb_separator_bottom', __( 'Данные для всплывающего окна' ) ),
				     Field::make('image', 'crb_image', __('Изображение') ),
				     Field::make('text', 'crb_title', __('Заголовок') ),
				     Field::make('text', 'crb_desc', __('Описание') ),
			     )),
		))
		->add_tab(__('Преимущества'), array(
			Field::make('complex', 'crb_benefits', __('Список Преимуществ') )
				->set_conditional_logic(array(
					array(
						'field' => 'crb_developer',
						'value' => 'MAG',
						'compare' => '=',
					)
				))
			     ->setup_labels($benefit_labels)
			     ->add_fields(array(
				     Field::make('text', 'crb_title', __('Заголовок преимущества') ),
				     Field::make('textarea', 'crb_desc' , __('Описание ')),
				     Field::make('image', 'crb_image', __('Изображение преимущества'))
			     ))
		));

	Container::make('term_meta', 'Запчасти')
		->add_fields(array(
			Field::make('image' , 'crb_image', __('Изображение Категории') ),
		));
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

//function title_filter( $where, &$wp_query ){
//	global $wpdb;
//	if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
//		$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
//	}
//	return $where;
//}
