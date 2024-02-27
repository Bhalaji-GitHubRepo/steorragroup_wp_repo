<?php

if ( ! function_exists( 'visualcompany_setup' ) ) :
	function visualcompany_setup() {
		load_theme_textdomain( 'visualcompany', get_template_directory() . '/languages' );
	}
endif;

add_action( 'after_setup_theme', 'visualcompany_setup' );

if ( ! function_exists( 'visualcompany_fonts_url' ) ) :
	/**
	 * Register Google fonts for VisualCompany
	 *
	 * Create your own visualcompany_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function visualcompany_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Inter:wght@400;600;700' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/lib/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function visualcompany_enqueue_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'visualcompany-custom', get_stylesheet_directory_uri() . '/assets/js/jquery.custom.js', array(), '1.0.0', 'all' );	

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'visualcompany-fonts', visualcompany_fonts_url(), array(), null );

	$deps = array( 'font-awesome' );

	wp_enqueue_style( 'visualcompany-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_enqueue_style( 'visualcompany-design', get_stylesheet_directory_uri() . '/design.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'design.css' ) ) ) );
	wp_enqueue_style( 'visualcompany-responsive-style', get_stylesheet_directory_uri() . '/responsive.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'responsive.css' ) ) ) );

    wp_dequeue_style( 'visualbusiness-style' );
    wp_dequeue_style( 'visualbusiness-design' );
    wp_dequeue_style( 'visualbusiness-responsive-style' );
    wp_dequeue_style( 'visualbusiness-fonts' );

}
add_action( 'wp_enqueue_scripts', 'visualcompany_enqueue_scripts' );

function visualcompany_block_assets() {
	$min = '';

	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	wp_enqueue_style( 'visualcompany-design', get_stylesheet_directory_uri() . '/design' . $min . '.css', array(), '1.0.2', 'all' );		
	wp_enqueue_style( 'visualcompany-reponsive-style', get_stylesheet_directory_uri() . '/responsive' . $min . '.css', array(), '1.0.2', 'all' );			
	
}
add_action( 'enqueue_block_assets', 'visualcompany_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function visualcompany_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			visualcompany_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'visualcompany_editor_styles' );

/**
 *
 * Remove actions.
 */
function visualcompany_remove_action() {
     remove_action( 'admin_notices','visualbusiness_notice' );
}

add_action( 'init', 'visualcompany_remove_action');

/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function visualcompany_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'visualcompany-border',
				'label' => esc_html__( 'Borders', 'visualcompany' ),
			)
		);
	}
	add_action( 'init', 'visualcompany_register_block_styles' );
}

/**
 * Registers pattern categories.
 *
 * @since VisualCompany 1.0
 *
 * @return void
 */
function visualcompany_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'visualcompany' => array( 'label' => __( 'VisualCompany Theme', 'visualcompany' ) )
	);

	$block_pattern_categories = apply_filters( 'visualcompany_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'visualcompany_register_pattern_category', 9 );

/*
 * Admin Notice
 */
function visualcompany_notice() {

    $theme = wp_get_theme();

    echo '<div class="notice notice-success is-dismissible"><p>'. esc_html('Thank you for installing the VisualCompany theme!','visualcompany') . '</p><p><a class="button-secondary" href="' . esc_url( $theme->get( 'ThemeURI' ) ) . '" target="_blank">' . esc_html( 'Theme Demo', 'visualcompany' ) . '</a> '. '&nbsp;' . ' <a class="button-primary" href="' . esc_url( $theme->get( 'AuthorURI' ) . '/themes/visualcompany-pro' ) . '" target="_blank">' . esc_html( 'Upgrade to PRO theme', 'visualcompany' ) . '</a></p></div>';

}

add_action('admin_notices', 'visualcompany_notice');