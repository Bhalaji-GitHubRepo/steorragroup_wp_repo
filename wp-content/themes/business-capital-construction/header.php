<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business Capital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-capital-construction' ); ?></a>

	<?php
		get_template_part( 'template-parts/header/' . business_capital_gtm( 'business_capital_header_style' ) );
		get_template_part( 'template-parts/header/custom-header' );
		get_template_part( 'template-parts/header/breadcrumb' );
		get_template_part( 'template-parts/slider/slider' );
		get_template_part( 'template-parts/wwd/wwd' );
		get_template_part( 'template-parts/hero-content/hero-content' );
		get_template_part( 'template-parts/featured-grid/featured-grid' );
		get_template_part( 'template-parts/testimonial/testimonial' );
		get_template_part( 'template-parts/contact-form/contact-form' );
	?>

	<?php
	$show_content = business_capital_gtm( 'business_capital_show_homepage_content' );

	if ( $show_content || ! is_front_page() ) : ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
	<?php endif; ?>
