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
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_text', 'Text Field' ),
	         ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
