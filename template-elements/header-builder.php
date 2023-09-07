<?php
/**
 * Builder template for header
 *
 * @package oblo
 */

?>

<?php
	$header_template = get_field( 'header_template', 'option' );
	$args = array( 'post_type' => 'hf_templates', 'p' => $header_template );
?>

<div class="header__builder">
    <?php
    	$loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();
		        the_content();
		    endwhile; wp_reset_postdata();
    ?>
	<?php if ( class_exists( 'WooCommerce' ) ) : ?>
	<div class="cart-btn<?php if ( WC()->cart->get_cart_contents_count() == 0 ) : ?> cart-btn-empty<?php endif; ?>">
		<div class="cart-icon zoom-cursor">
			<span class="cart-count"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'oblo' ), WC()->cart->get_cart_contents_count() ); ?></span> 
		</div>
		<div class="cart-widget">
			<?php woocommerce_mini_cart(); ?>
		</div>
	</div>
	<?php endif; ?>
</div>