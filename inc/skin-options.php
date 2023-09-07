<?php
/**
 * Skin
**/

if ( function_exists( 'get_field' ) ) {
	/**
	 * Dark Version
	 */

	$theme_ui = get_field( 'theme_ui', 'option' );

	if ( $theme_ui ) {
		function oblo_light_stylesheets() {
			wp_enqueue_style( 'oblo-light', get_template_directory_uri() . '/assets/styles/light.css', '1.0' );
		}
		add_action( 'wp_enqueue_scripts', 'oblo_light_stylesheets', 10 );
	}
}

function oblo_skin() {
	$theme_ui = get_field( 'theme_ui', 'option' );
	$base_bg_color = get_field( 'base_bg_color', 'options' );
	$extra_bg_color = get_field( 'extra_bg_color', 'options' );
	$text_color = get_field( 'text_color', 'options' );
	$extra_text_color = get_field( 'extra_text_color', 'options' );
	$base_white_color = get_field( 'base_white_color', 'options' );
	$theme_color = get_field( 'theme_color', 'options' );
	$base_font_size = get_field( 'base_font_size', 'options' );
	$extra_font_size = get_field( 'extra_font_size', 'options' );
	$small_font_size = get_field( 'small_font_size', 'options' );
	$heading_font_size = get_field( 'heading_font_size', 'options' );
	$post_heading_font_size = get_field( 'post_heading_font_size', 'options' );
	$full_slider_font_size = get_field( 'full_slider_font_size', 'options' );
	$half_slider_font_size = get_field( 'half_slider_font_size', 'options' );

	$text_font_family = get_field( 'text_font_family', 'options' );
	$primary_font_family = get_field( 'primary_font_family', 'options' );

	$header_logo_size = get_field( 'header_logo_size', 'options' );
	$header_logo_size_mob = get_field( 'header_logo_size_mob', 'options' );

	$menu_btn_color = get_field( 'menu_btn_color', 'options' );
	$menu_head_color = get_field( 'menu_head_color', 'options' );

	$menu_items_size = get_field( 'menu_items_size', 'options' );
	$menu_items_size_mob = get_field( 'menu_items_size_mob', 'options' );

	$sub_menu_items_size = get_field( 'sub_menu_items_size', 'options' );
	$sub_menu_items_size_mob = get_field( 'sub_menu_items_size_mob', 'options' );
	
	$menu_font_weight = get_field( 'menu_font_weight', 'options' );
	$menu_align = get_field( 'menu_align', 'options' );
	
	$preloader_height = get_field( 'preloader_height', 'options' );
	$preloader_color = get_field( 'preloader_color', 'options' );

	if ( $theme_ui ) {
		$base_bg_color = get_field( 'base_bg_color_light', 'options' );
		$extra_bg_color = get_field( 'extra_bg_color_light', 'options' );
		$text_color = get_field( 'text_color_light', 'options' );
		$extra_text_color = get_field( 'extra_text_color_light', 'options' );
		$base_white_color = get_field( 'base_white_color_light', 'options' );
		$menu_btn_color = get_field( 'menu_btn_color_light', 'options' );
		$menu_head_color = get_field( 'menu_head_color_light', 'options' );
	}
?>

<style>
	<?php if ( $base_bg_color ) : ?>
	/* Base BG Color */
	html,
	body,
	.header.default-sticky,
	.section.hero-started,
	.works-item .image:before,
	.works-item .image:after,
	.works-item .image .img:before,
	.works-item .image .img:after,
	.section.m-works-carousel .works-slide .image:before,
	.section.m-works-carousel .works-slide .image:after,
	.section.m-works-carousel .works-slide .image .img:before,
	.section.m-works-carousel .works-slide .image .img:after,
	.team-item .image:before,
	.team-item .image:after,
	.team-item .image .img:before,
	.team-item .image .img:after,
	.section.hero-started .hero-started__shadow {
		background-color: <?php echo esc_attr( $base_bg_color ); ?>;
	}
	.works-items.classic .works-item a:after,
	.section.m-works-carousel .works-slide .slide:before {
		background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(<?php echo esc_attr( $base_bg_color ); ?>));
		background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, <?php echo esc_attr( $base_bg_color ); ?> 100%);
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, <?php echo esc_attr( $base_bg_color ); ?> 100%);
	}
	@media screen and (max-width: 1100px) {
		.main-slider .canvas:before,
		.full-slider .canvas:before,
		.half-slider .canvas:before {
			background: -webkit-gradient(linear, left top, left bottom, color-stop(25%, rgba(33, 32, 46, 0)), to(<?php echo esc_attr( $base_bg_color ); ?>));
			background: -o-linear-gradient(top, rgba(33, 32, 46, 0) 25%, <?php echo esc_attr( $base_bg_color ); ?> 100%);
			background: linear-gradient(to bottom, rgba(33, 32, 46, 0) 25%, <?php echo esc_attr( $base_bg_color ); ?> 100%);
		}
	}
	<?php endif; ?>

	<?php if ( $extra_bg_color ) : ?>
	/* Extra BG Color */
	.preloader:before,
	.nav-menu-horizontal li ul,
	.menu-full-overlay:before,
	.h-titles .h-image .img,
	.section.m-video-large .video .img,
	.section.m-video-large .video video,
	.section.m-page-navigation {
		background-color: <?php echo esc_attr( $extra_bg_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $text_color ) : ?>
	/* Paragraphs Color */
	html,
	body,
	.menu-full ul li a,
	.header .logo .logotype__sub,
	.footer .social-links a,
	.footer-social-links a,
	.section.half-slider .slide-titles .text,
	.m-titles .m-category,
	.h-titles a .char,
	.h-titles a .word,
	.filter-links a,
	.works-item .desc .name,
	.section.m-page-navigation a,
	.archive-item .desc .category span,
	.content-sidebar ul li,
	.wp-block-categories-list li,
	.wp-block-archives-list li,
	.post-content .wp-block-archives li,
	.calendar_wrap table,
	.wp-block-calendar table {
		color: <?php echo esc_attr( $text_color ); ?>;
	}
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea {
		border-color: <?php echo esc_attr( $text_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $extra_text_color ) : ?>
	/* Extra text color */
	code,
	.menu-full ul li ul li a,
	.menu-social-links a,
	.footer .copyright-text,
	.footer .copyright-text p,
	.section.main-slider .slide-titles .label,
	.section.half-slider .slide-titles .label,
	.profile-box .subname,
	.section.m-page-navigation .nav-arrow,
	.post-content table th,
	.wp-block-table.is-style-stripes th,
	pre,
	pre code,
	.content-sidebar ul li .rss-date,
	.content-sidebar ul li cite,
	.comment-box__details span {
		color: <?php echo esc_attr( $extra_text_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $base_white_color ) : ?>
	/* Base white color */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	a,
	a.btn,
	.btn,
	a.btn-link,
	.btn-link,
	button,
	input[type="submit"],
	a.btn:hover,
	.btn:hover,
	a.btn-link:hover,
	.btn-link:hover,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	input:focus,
	textarea:focus,
	button:focus,
	.block-quote,
	blockquote,
	.block-quote,
	.wp-block-quote,
	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.wp-block-pullquote,
	select,
	.custom-select,
	.wp-block-button__link,
	.alert-success,
	.nav-menu-horizontal li a,
	.menu-full ul li a strong,
	.menu-full ul li a:hover .char,
	.menu-full ul li a:hover .word,
	.menu-full ul li ul li a:hover .char,
	.menu-full ul li ul li a:hover .word,
	.menu-full ul li ul li.active>a,
	.menu-full ul li.active>a,
	.menu-social-links a:hover i,
	.menu-social-links a:hover .char,
	.header .logo .logotype__title,
	.footer .social-links a:hover .char,
	.footer .social-links a:hover .word,
	.footer-social-links a:hover .char,
	.footer-social-links a:hover .word,
	.section.main-slider .slide-titles .titles,
	.section.main-slider .swiper-pagination .swiper-pagination-bullet,
	.section.full-slider .swiper-pagination .swiper-pagination-bullet,
	.section.half-slider .swiper-pagination .swiper-pagination-bullet,
	.section.main-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.full-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.half-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.main-slider .view-btn a,
	.section.full-slider .view-btn a,
	.section.half-slider .view-btn a,
	.section.full-slider .slide-titles .titles,
	.section.full-slider .slide-titles .label,
	.section.half-slider .slide-titles .titles,
	.m-titles .m-title,
	.h-titles a:hover .char,
	.h-titles a:hover .word,
	.h-titles .h-title,
	.h-titles .h-subtitle,
	.section.hero-started .title,
	.section.hero-started .subtitle,
	.profile-box .image .signature,
	.profile-box .name,
	.profile-box .text,
	.quote-box .subname,
	.quote-box .name,
	.quote-box .label,
	.experience-carousel .slide-titles .titles,
	.awwards-item .desc,
	.awwards-item a,
	.filter-links a:hover .char,
	.filter-links a:hover .word,
	.filter-links a.active,
	.works-item:hover .desc .name .char,
	.works-item:hover .desc .name .word,
	.section.m-works-carousel .works-slide .desc .name,
	.c-list ul li,
	.c-list ul li a,
	.section.m-details .details-label strong,
	.section.m-description .description-label,
	.archive-item .desc .title,
	.archive-item .desc .title a,
	.services-item .name,
	.team-item .desc .name,
	.post-content table td,
	.wp-block-table.is-style-stripes td,
	.post-content ol,
	.post-content ul,
	a.page-numbers,
	.page-numbers,
	.post-page-numbers,
	.content-sidebar .search-form input[type="text"],
	.content-sidebar .search-form input[type="search"],
	.wp-block-search input[type="text"],
	.wp-block-search input[type="search"],
	.content-sidebar .widget-title,
	.content-sidebar ul li a,
	.post-content .wp-block-archives li a,
	.tags-links a,
	.col__sedebar .tagcloud a,
	.wp-block-tag-cloud a,
	.comment-box__details,
	.post-password-form input[type="submit"],
	a.wp-block-button__link,
	.wp-block-cover p:not(.has-text-color) a {
		color: <?php echo esc_attr( $base_white_color ); ?>;
	}
	input:focus,
	textarea:focus,
	button:focus {
		border-color: <?php echo esc_attr( $base_white_color ); ?>;
	}
	select,
	.custom-select {
		background-color: <?php echo esc_attr( $base_white_color ); ?>;
	}
	@media screen and (max-width: 1100px) {
		.section.main-slider .slide-titles .subtitle,
		.section.main-slider .slide-titles .title {
			color: <?php echo esc_attr( $base_white_color ); ?>;
		}
	}
	@media screen and (max-width: 768px) {
		.section.main-slider .slide-titles .titles.dark,
		.works-item .desc .name .char, 
		.works-item .desc .name .word {
			color: <?php echo esc_attr( $base_white_color ); ?>;
		}
	}
	<?php endif; ?>

	<?php if ( $theme_color ) : ?>
	/* Theme Color */
	a,
	a:link,
	a:active,
	a:visited,
	a:hover,
	.wp-block-calendar a,
	.is-style-outline .wp-block-button__link,
	.nav-menu-horizontal li a:hover,
	.header .logo .logotype__title:first-letter,
	.section.main-slider .slide-titles .title em,
	.m-titles .m-category a,
	.h-titles .h-subtitle.red,
	.experience-carousel .slide-titles .label,
	.c-list ul li strong,
	.archive-item .desc .category,
	.services-item .icon i,
	.content-sidebar ul li a:hover,
	.post-content .wp-block-archives li a:hover,
	.wp-block-calendar tfoot a,
	.content-sidebar ul li a.rsswidget,
	.wp-block-rss li a,
	.share-post .share-btn:hover,
	.is-style-outline>.wp-block-button__link:not(.has-text-color), 
	.wp-block-button__link.is-style-outline:not(.has-text-color),
	.woocommerce #respond input#submit, 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit, 
	.woocommerce-mini-cart__buttons a.button, 
	.woocommerce-mini-cart__buttons button.button, 
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit, 
	.woocommerce-js a.button, 
	.woocommerce-js button.button, 
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit, 
	.woocommerce-js .woocommerce-mini-cart__buttons a.button, 
	.woocommerce-js .woocommerce-mini-cart__buttons button.button, 
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce .star-rating span:before,
	.woocommerce-js .star-rating span:before,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	.woocommerce .cart .button[name="update_cart"],
	.woocommerce-js .cart .button[name="update_cart"],
	#add_payment_method .wc-proceed-to-checkout a.checkout-button, 
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #respond input#submit.alt, 
	.woocommerce a.button.alt, 
	.woocommerce button.button.alt, 
	.woocommerce input.button.alt,
	.woocommerce-js #respond input#submit.alt, 
	.woocommerce-js a.button.alt, 
	.woocommerce-js button.button.alt, 
	.woocommerce-js input.button.alt,
	.product-categories .current-cat, 
	.product-categories .current-cat a,
	.woocommerce ul.product_list_widget li a.remove:hover, 
	ul.product_list_widget li a.remove:hover,
	.woocommerce-js ul.product_list_widget li a.remove:hover,
	.works-item .desc .category {
		color: <?php echo esc_attr( $theme_color ); ?>;
	}
	input[type="submit"],
	a.btn:before,
	.btn:before,
	a.btn-link:before,
	.btn-link:before,
	button:before,
	.wp-block-button__link,
	.preloader .spinner,
	.menu-full ul li ul li a:before,
	.footer .social-links a:before,
	.footer-social-links a:before,
	.section.main-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.full-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.half-slider .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.section.main-slider .view-btn a:before,
	.section.full-slider .view-btn a:before,
	.section.half-slider .view-btn a:before,
	.filter-links a:before,
	a.page-numbers.prev .icon-arrow,
	a.page-numbers.next .icon-arrow,
	a.page-numbers.prev .icon-arrow:before,
	a.page-numbers.prev .icon-arrow:after,
	a.page-numbers.next .icon-arrow:before,
	a.page-numbers.next .icon-arrow:after,
	a.page-numbers.current,
	a.post-page-numbers.current,
	.page-numbers.current,
	.post-page-numbers.current,
	.content-sidebar .widget-title:before,
	.content-sidebar ul ul li:before,
	.post-password-form input[type="submit"],
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-handle,
	.header .cart-btn .cart-icon .cart-count,
	.woocommerce .products div.product .button.add_to_cart_button:after,
	.woocommerce-js .products div.product .button.add_to_cart_button:after,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce div.product .button.single_add_to_cart_button:after,
	.woocommerce-js div.product .button.single_add_to_cart_button:after,
	.woocommerce #review_form #respond .form-submit .submit:hover, 
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	.woocommerce #respond input#submit:after, 
	.woocommerce a.button:after, 
	.woocommerce button.button:after, 
	.woocommerce input.button:after,
	.woocommerce-js #respond input#submit:after, 
	.woocommerce-js a.button:after, 
	.woocommerce-js button.button:after, 
	.woocommerce-js input.button:after,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce #review_form #respond .form-submit .submit:hover, 
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	.hero-main-slider .slide-titles .title:after,
	.preloader .spinner.spinner-line,
	.section.m-works-carousel .works-slide .desc .name:before,
	body .js-testimonials .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.content-sidebar .widget-title:before,
	.content-sidebar h2:before,
	body .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
		background-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	a.btn,
	.btn,
	a.btn-link,
	.btn-link,
	button,
	input[type="submit"],
	.wp-block-button__link,
	.is-style-outline .wp-block-button__link,
	a.page-numbers,
	.post-page-numbers,
	a.page-numbers.current,
	a.post-page-numbers.current,
	.page-numbers.current,
	.post-page-numbers.current,
	.tags-links a,
	.col__sedebar .tagcloud a,
	.wp-block-tag-cloud a,
	.share-post .share-btn:hover,
	.woocommerce #respond input#submit, 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit, 
	.woocommerce-mini-cart__buttons a.button, 
	.woocommerce-mini-cart__buttons button.button, 
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit, 
	.woocommerce-js a.button, 
	.woocommerce-js button.button, 
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit, 
	.woocommerce-js .woocommerce-mini-cart__buttons a.button, 
	.woocommerce-js .woocommerce-mini-cart__buttons button.button, 
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button, 
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button {
		border-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $base_font_size ) : ?>
	/* Base font size */
	html,
	body,
	a.btn,
	.btn,
	a.btn-link,
	.btn-link,
	button,
	input[type="submit"],
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	label,
	legend,
	.menu-social-links a i,
	a.page-numbers,
	.page-numbers,
	.post-page-numbers,
	.comments-post .m-title small,
	.comment-reply-link,
	.share-post .share-btn {
		font-size: <?php echo esc_attr( $base_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $extra_font_size ) : ?>
	/* Extra font size */
	.block-quote,
	blockquote,
	.block-quote,
	.wp-block-quote,
	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.wp-block-pullquote,
	.block-quote p,
	blockquote p,
	.block-quote p,
	.wp-block-quote p,
	.wp-block-quote.is-large p,
	.wp-block-quote.is-style-large p,
	.wp-block-pullquote p,
	.header .logo .logotype__title,
	.section.main-slider .slide-titles .subtitle,
	.h-titles .h-subtitle,
	.section.hero-started .subtitle,
	.profile-box .name,
	.quote-box .subname,
	.experience-carousel .slide-titles .label,
	.awwards-item .title,
	.works-item .desc .name,
	.section.m-works-carousel .works-slide .desc .name,
	.section.m-description .description-label,
	.archive-item .desc .title,
	.services-item .name,
	.team-item .desc .name,
	.content-sidebar .widget-title,
	.comment-box__details {
		font-size: <?php echo esc_attr( $extra_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $small_font_size ) : ?>
	/* Small font size */
	.menu-full ul li a strong,
	.menu-social-links a,
	.section.main-slider .slide-titles .label,
	.section.main-slider .swiper-pagination .swiper-pagination-bullet,
	.section.full-slider .swiper-pagination .swiper-pagination-bullet,
	.section.half-slider .swiper-pagination .swiper-pagination-bullet,
	.section.full-slider .slide-titles .label,
	.section.half-slider .slide-titles .label,
	.profile-box .subname,
	.awwards-item .label,
	.section.m-page-navigation .nav-arrow {
		font-size: <?php echo esc_attr( $small_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $heading_font_size ) : ?>
	/* Heading font size */
	.section.main-slider .slide-titles .title,
	.h-titles .h-title,
	.section.hero-started .title,
	.quote-box .name,
	.experience-carousel .slide-titles .title {
		font-size: <?php echo esc_attr( $heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $post_heading_font_size ) : ?>
	/* Post heading font size */
	.m-titles .m-title,
	.section.m-page-navigation .h-title {
		font-size: <?php echo esc_attr( $post_heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $full_slider_font_size ) : ?>
	/* Full slider font size */
	.section.full-slider .slide-titles .title {
		font-size: <?php echo esc_attr( $full_slider_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $half_slider_font_size ) : ?>
	/* Half slider font size */
	.section.half-slider .slide-titles .title {
		font-size: <?php echo esc_attr( $half_slider_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $text_font_family ) : ?>
	/* Paragraphs Font */
	html,
	body,
	input,
	textarea,
	button,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	label,
	legend,
	label.error,
	.block-quote,
	blockquote,
	.block-quote,
	.wp-block-quote,
	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.wp-block-pullquote,
	.menu-full ul li ul li a {
		font-family: '<?php echo esc_attr( $text_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $primary_font_family ) : ?>
	/* Primary Font */
	.block-quote cite,
	blockquote cite,
	.block-quote cite,
	.wp-block-quote cite,
	.wp-block-quote.is-large cite,
	.wp-block-quote.is-style-large cite,
	.wp-block-pullquote cite,
	.menu-full ul li a,
	.section.main-slider .slide-titles .title,
	.section.full-slider .slide-titles .title,
	.m-titles .m-title,
	.h-titles .h-title,
	.section.hero-started .title,
	.quote-box .name,
	.quote-box .label,
	.experience-carousel .slide-titles .title,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.hero-main-slider .slide-titles .title,
	.section.m-works-carousel .works-slide .desc .name {
		font-family: '<?php echo esc_attr( $primary_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $header_logo_size ) : ?>
	/* Logo size */
	.header .logo {
		width: <?php echo esc_attr( $header_logo_size ); ?>px;
	}
	<?php endif; ?>
	<?php if ( $header_logo_size_mob ) : ?>
	@media (max-width: 768px) {
		.header .logo {
			width: <?php echo esc_attr( $header_logo_size_mob ); ?>px;
		}
	}
	<?php endif; ?>

	<?php if ( $menu_btn_color ) : ?>
	/* Menu Button */
	.menu-btn span:before, 
	.menu-btn span:after,
	.nav-white .menu-btn span:before, 
	.nav-white .menu-btn span:after {
		background-color: <?php echo esc_attr( $menu_btn_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $menu_head_color ) : ?>
	/* Header sticky */
	.header.sticky,
	.header.default-sticky {
		background-color: <?php echo esc_attr( $menu_head_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $menu_items_size ) : ?>
	/* Menu size */
	.menu-full ul li a {
		font-size: <?php echo esc_attr( $menu_items_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $sub_menu_items_size ) : ?>
	/* Sub Menu size */
	.menu-full ul li ul li a {
		font-size: <?php echo esc_attr( $sub_menu_items_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $menu_items_size_mob ) : ?>
	/* Menu size mobile */
	@media (max-width: 768px) {
		.menu-full ul li a {
			font-size: <?php echo esc_attr( $menu_items_size_mob ); ?>px;
		}
	}
	<?php endif; ?>

	<?php if ( $sub_menu_items_size_mob ) : ?>
	/* Sub Menu size */
	@media (max-width: 768px) {
		.menu-full ul li ul li a {
			font-size: <?php echo esc_attr( $sub_menu_items_size_mob ); ?>px;
		}
	}
	<?php endif; ?>
	
	<?php if ( $menu_font_weight ) : ?>
	/* Menu weight */
	.menu-full ul li a {
		font-weight: <?php echo esc_attr( $menu_font_weight ); ?>;
	}
	<?php endif; ?>
	
	<?php if ( $menu_align ) : ?>
	/* Menu align */
	.menu-full ul {
		text-align: <?php echo esc_attr( $menu_align ); ?>;
	}
	<?php endif; ?>
	
	<?php if ( $preloader_color ) : ?>
	/* preloader color */
	.preloader:before {
		background: <?php echo esc_attr( $preloader_color ); ?>!important;
	}
	<?php endif; ?>
	
	<?php if ( $preloader_height ) : ?>
	/* preloader color */
	.preloader .spinner {
		height: <?php echo esc_attr( $preloader_height ); ?>px!important;
	}
	<?php endif; ?>

</style>

<?php
}
add_action( 'wp_head', 'oblo_skin', 10 );