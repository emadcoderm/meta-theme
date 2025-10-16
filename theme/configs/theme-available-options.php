<?php
/**
 * Options for theme settings and elements.
 *
 * @version 1.0
 * @package xts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

return apply_filters(
	'xts_theme_available_options_array',
	array(
		'product_loop_design'                            => array(
			'add-to-cart' => array(
				'name'  => esc_html__( 'Add to cart on hover', 'xts-theme' ),
				'value' => 'add-to-cart',
			),
			'small-bg'    => array(
				'name'  => esc_html__( 'Small with background', 'xts-theme' ),
				'value' => 'small-bg',
			),
		),

		'product_loop_design_elementor'                  => array(
			'add-to-cart' => esc_html__( 'Add to cart on hover', 'xts-theme' ),
			'small-bg'    => esc_html__( 'Small with background', 'xts-theme' ),
		),

		'banner_element_hover_effect_elementor'          => array(
			'move-right' => esc_html__( 'Move aside', 'xts-theme' ),
		),

		'banner_carousel_element_hover_effect_elementor' => array(
			'move-right' => esc_html__( 'Move aside', 'xts-theme' ),
		),

		'image_element_hover_effect_elementor'           => array(
			'move-right' => esc_html__( 'Move aside', 'xts-theme' ),
		),

		'image_gallery_element_hover_effect_elementor'   => array(
			'move-right' => esc_html__( 'Move aside', 'xts-theme' ),
		),

		'menu_style_header_builder'                      => array(
			'underline-dot' => array(
				'value' => 'underline-dot',
				'label' => esc_html__( 'Underline with dot', 'xts-theme' ),
			),
		),

		'menu_style_widget'                              => array(
			esc_html__( 'Underline with dot', 'xts-theme' ) => 'underline-dot',
		),

		'menu_style_elementor'                           => array(
			'underline-dot' => esc_html__( 'Underline with dot', 'xts-theme' ),
		),

		'slider_arrows_vertical_position'                => array(
			'sides' => array(
				'name'  => esc_html__( 'Sides', 'xts-theme' ),
				'value' => 'sides',
			),
			'top'   => array(
				'name'  => esc_html__( 'Top', 'xts-theme' ),
				'value' => 'top',
			),
		),

		'blog_design_elementor'                          => array(
			'mask' => esc_html__( 'Mask', 'xts-theme' ),
		),

		'blog_design'                                    => array(
			'mask' => array(
				'name'  => esc_html__( 'Mask', 'xts-theme' ),
				'value' => 'mask',
			),
		),
	)
);
