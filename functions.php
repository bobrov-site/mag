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

	Container::make( 'post_meta', 'Товар' )
	         ->where( 'post_type', '=', 'product' )
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
		->add_tab( __( 'С этим товаром покупают' ), array(
			Field::make('association', 'crb_association', __('Выбрать товары'))
			->set_types(array(
				array(
					'post_type' => 'product',
					'type' => 'post'
				)
			))
			->set_max(4)
		) );

	Container::make( 'post_meta', 'Производство' )
	         ->where( 'post_type', '=', 'production' )
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
			->add_tab(__('Преимущества'), array(
				Field::make('complex', 'crb_benefits', __('Список Преимуществ') )
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
