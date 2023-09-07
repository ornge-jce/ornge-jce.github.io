<?php
/**
 * Default template for footer
 *
 * @package oblo
 */

?>

<?php
	$social_links = get_field( 'social_links', 'option' );
	$social_links_type = get_field( 'social_links_type', 'option' );

	$copyright = get_field( 'footer_text', 'option' );
	$footer_heading = get_field( 'footer_heading', 'option' );
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12<?php if ( $footer_heading ) : ?> col-lg-5<?php else : ?> col-lg-12 align-center<?php endif; ?>">

			<div class="copyright-text scrolla-element-anim-1 scroll-animate" data-animate="active">
				<?php if ( ! empty( $copyright ) ) :
					echo wp_kses_post( $copyright );
				else :
					echo esc_html__( '&copy; 2021. All rights reserved', 'oblo' );
				endif; ?>
			</div>

		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

			<?php if ( $footer_heading ) : ?>
			<!-- titles -->
			<div class="h-titles">
				<?php if ( $footer_heading['subtitle'] ) : ?>
				<div class="h-subtitle splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
					<?php echo wp_kses_post( $footer_heading['subtitle'] ); ?>
				</div>
				<?php endif; ?>
				<?php if ( $footer_heading['subtitle'] ) : ?>
				<div class="h-title splitting-text-anim-2 scroll-animate" data-splitting="chars" data-animate="active">
					<?php echo wp_kses_post( $footer_heading['title'] ); ?>
				</div>
				<?php endif; ?>
				<?php if ( $footer_heading['description'] ) : ?>
				<div class="h-text scrolla-element-anim-1 scroll-animate" data-animate="active">
					<?php echo wp_kses_post( $footer_heading['description'] ); ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<?php if ( $social_links ) : ?>
			<!-- social -->
			<div class="social-links">
				<?php $i=0; foreach ( $social_links as $link ) : $i++; ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>" target="blank" class="splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active" title="<?php echo esc_attr( $link['name'] ); ?>">
					<?php if ( $social_links_type == 'icons' ) : ?>
					<i class="<?php echo esc_attr( $link['icon'] ); ?>"></i>
					<?php else : ?>
					<?php echo esc_html( $link['icon_label'] ); ?>
					<?php endif; ?>
				</a>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>

		</div>
	</div>
</div>