<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Business Capital Construction.
 *
 * @package Business Capital Construction
 * @author  FireflyThemes https://fireflythemes.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
function business_capital_construction_child_enqueue_styles() {
    wp_enqueue_style( 'business-capital-style' , get_template_directory_uri() . '/style.css', null, business_capital_construction_get_file_mod_date( get_template_directory() . '/style.css' ) );

	wp_enqueue_style( 'business-capital-construction-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'business-capital-style' ),
        business_capital_construction_get_file_mod_date( get_stylesheet_directory() . '/style.css' )
    );
}
add_action(  'wp_enqueue_scripts', 'business_capital_construction_child_enqueue_styles' );

/**
 * Get file modified date
 */
function business_capital_construction_get_file_mod_date( $file ) {
	return date( 'Ymd-Gis', filemtime( $file ) );
}

/**
 * Loads the child theme textdomain.
 */
function business_capital_construction_setup() {
    load_child_theme_textdomain( 'business-capital-construction', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'business_capital_construction_setup', 11 );

/**
 * Customizer additions.
 */
require get_theme_file_path( '/inc/customizer/business-capital-construction-header-options.php' );
