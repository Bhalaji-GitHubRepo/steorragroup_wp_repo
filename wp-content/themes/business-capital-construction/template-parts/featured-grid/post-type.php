<?php
/**
 * Template part for displaying Post Types Slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Capital
 */

$business_capital_args = business_capital_get_section_args( 'featured_grid' );

$business_capital_loop = new WP_Query( $business_capital_args );

if ( $business_capital_loop->have_posts() ) :
	?>
	<div class="featured-grid-section">
		<div class="row">
			<?php
			while ( $business_capital_loop->have_posts() ) :
				$business_capital_loop->the_post();
				?>
				<div class="featured-grid-item ff-grid-6">
					<div class="featured-grid-wrapper inner-block-shadow">
						<?php
						if ( has_post_thumbnail() ) : ?>
						<div class="featured-grid-thumb">
							<a class="image-hover-zoom" href="<?php the_permalink(); ?>" >
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!-- featured-grid-thumb  -->
						<?php endif; ?>

						<div class="featured-grid-text-content top-left-right-radius">
							<?php the_title( '<h3 class="featured-grid-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h3>'); ?>
							
							<?php business_capital_display_content( 'featured_grid' ); ?>
						</div><!-- .featured-grid-text-content -->
					</div><!-- .featured-grid-wrapper -->
				</div><!-- .featured-grid-item -->
			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .featured-grid-block-list -->
<?php
endif;

wp_reset_postdata();
