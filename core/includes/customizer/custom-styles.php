<?php
/**
 * Outputs the customizer styles.
 *
 * @package Responsive
 * @since 0.2
 */

/**
 * Outputs the custom styles for the theme.
 *
 * @return void
 */
function responsive_premium_custom_color_styles() {
	$text_color             = get_theme_mod( 'text-color', '#333333' );
	$body_typography        = get_theme_mod( 'body_typography' );
	$headings_typography    = get_theme_mod( 'headings_typography' );
	$heading_text_color     = get_theme_mod( 'heading-text-color', '' );
	$link_color             = get_theme_mod( 'link-color', '#078ce1' );
	$link_hover_color       = get_theme_mod( 'link-hover-color', '#10659c' );
	$button_color           = get_theme_mod( 'button-color', '#1874cd' );
	$button_hover_color     = get_theme_mod( 'button-hover-color', '#7db7f0' );
	$button_text_color      = get_theme_mod( 'button-text-color', '#ffffff' );
	$label_color            = get_theme_mod( 'label-color', '#10659c' );
	$input_background_color = get_theme_mod( 'input-background-color', '#ffffff' );
	$container_width        = get_theme_mod( 'responsive_main_container_width', '960' );
	$layout_style           = get_theme_mod( 'responsive_layout_styles', '' );
	$input_border_color_fs  = get_theme_mod( 'input-border-color-focus', '#eaeaea' );
	$input_border_color     = get_theme_mod( 'input-border-color', '#eaeaea' );

	if ( isset( $body_typography['color'] ) ) {
		$body_color = $body_typography['color'];
	} else {
		$body_color = '#929292';
	}

	if ( isset( $headings_typography['color'] ) ) {
		$heading_color = $headings_typography['color'];
	} else {
		$heading_color = '#333333';
	}

	if ( isset( $body_typography['text-transform'] ) ) {
		$text_transform = $body_typography['text-transform'];
	} else {
		$text_transform = 'inherit';
	}

	if ( isset( $headings_typography['text-transform'] ) ) {
		$headingtext_transform = $headings_typography['text-transform'];
	} else {
		$headingtext_transform = 'inherit';
	}

	if ( isset( $body_typography['letter-spacing'] ) ) {
		$letter_spacing = $body_typography['letter-spacing'];
	} else {
		$letter_spacing = '0';
	}

	if ( isset( $headings_typography['letter-spacing'] ) ) {
		$headingsletter_spacing = $headings_typography['letter-spacing'];
	} else {
		$headingsletter_spacing = '0';
	}

	if ( isset( $body_typography['font-weight'] ) ) {
		$font_weight = $body_typography['font-weight'];
	} else {
		$font_weight = '400';
	}

	if ( isset( $headings_typography['font-weight'] ) ) {
		$headingsfont_weight = $headings_typography['font-weight'];
	} else {
		$headingsfont_weight = '700';
	}

	if ( isset( $body_typography['line-height'] ) ) {
		$line_height = $body_typography['line-height'];
	} else {
		$line_height = '1.8';
	}

	if ( isset( $headings_typography['line-height'] ) ) {
		$headingsline_height = $headings_typography['line-height'];
	} else {
		$headingsline_height = '1.4';
	}

	if ( isset( $body_typography['font-style'] ) ) {
		$font_style = $body_typography['font-style'];
	} else {
		$font_style = 'normal';
	}

	if ( isset( $headings_typography['font-style'] ) ) {
		$headingsfont_style = $headings_typography['font-style'];
	} else {
		$headingsfont_style = 'normal';
	}

	$custom_css = "
		body {
			font-family: {$body_typography['font-family']};
			text-transform: {$text_transform};
			letter-spacing: {$letter_spacing};
			color: {$body_color};
			font-weight: {$font_weight};
			line-height: {$line_height};
			font-style: {$font_style};
			box-sizing: border-box;
		}
		h1,h2,h3,h4,h5,h6,
		.theme-heading,
		.widget-title,
		.responsive-widget-recent-posts-title,
		.comment-reply-title,
		.entry-title a,
		entry-title,
		.sidebar-box,
		.widget-title,
		.site-title a, .site-description {
			font-family: {$headings_typography['font-family']};
			text-transform: {$headingtext_transform};
			letter-spacing: {$headingsletter_spacing};
			color: {$heading_color};
			font-weight: {$headingsfont_weight};
			line-height: {$headingsline_height};
			font-style: {$headingsfont_style};
		}
		a {
			color: {$link_color};
		}
		a:hover {
			color: {$link_hover_color};
		}
		input {
			background-color: {$input_background_color};
			border-color: {$input_border_color};
		}
		input:focus {
			background-color: {$input_background_color};
			border-color: {$input_border_color_fs};
		}

		#content-woocommerce .product .single_add_to_cart_button, .added_to_cart.wc-forward, .woocommerce ul.products li.product .button,
		input[type='submit'], input[type=button], a.button, .button, .call-to-action a.button{
			color: {$button_text_color};
			background-color: {$button_color};
		}
		button:hover, input[type='submit']:hover, input[type=button]:hover, a.button:hover, .button:hover, .woocommerce input.button:hover , .call-to-action a.button:hover,
		#content-woocommerce .product .single_add_to_cart_button:hover, #content-woocommerce .product .single_add_to_cart_button:focus, .added_to_cart.wc-forward:hover, .added_to_cart.wc-forward:focus, .woocommerce ul.products li.product .button:hover, .woocommerce ul.products li.product .button:focus {
				background-color: {$button_hover_color};
		}
		label {
			color: {$label_color};
		}
		.fullwidth-layout
		.container, div#container {
			width: {$container_width}px;
			max-width: 100%;
		}
		.boxed-layout
		.content-area {
			width: {$container_width}px;
		}
	";

	wp_add_inline_style( 'responsive-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'responsive_premium_custom_color_styles', 99 );
