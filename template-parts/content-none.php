<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oblo
 */

?>


<div class="description content-none scrolla-element-anim-1 scroll-animate" data-animate="active">
	<h2><?php esc_html_e( 'Nothing Found', 'oblo' ); ?></h2>
	
	<?php
	if ( is_home() && current_user_can( 'publish_posts' ) ) :
		printf(
			'<p>' . wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'oblo' ),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url( admin_url( 'post-new.php' ) )
		);
	elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'oblo' ); ?></p>
	<?php else : ?>
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'oblo' ); ?></p>
	<?php endif; ?>
</div>