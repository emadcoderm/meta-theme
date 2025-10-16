<?php
/**
 * Default values for theme settings dashboard options.
 *
 * @version 1.0
 * @package xts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

return apply_filters(
	'xts_theme_default_values_array',
	array(
		'meta_post_author_args'             => array(
			'avatar'      => true,
			'avatar_size' => 40,
			'avatar_link' => true,
			'label'       => false,
			'name'        => true,
		),
		'single_product_tabs_menu_style'    => 'underline-dot',
		'blog_single_related_posts_per_row' => 3,
		'single_product_tabs_menu_gap'      => 'l',
		'tooltip_top_selector'              => '.xts-prod-design-icons .xts-product-actions > div, .xts-hint, .xts-variation-swatch.xts-with-bg, .xts-loop-swatch.xts-with-bg, .xts-sticky-atc .xts-action-btn, .xts-filter-swatch.xts-with-bg.xts-with-tooltip, [data-xts-tooltip], .xts-prod-design-add-to-cart .xts-product-footer-actions > div, .xts-prod-design-add-to-cart .xts-wishlist-btn',
		'menu_animation_offset'             => 20,
		// Theme settings.
		'blog_columns'                      => '4',
		'blog_excerpt_length'               => '70',
		'blog_spacing'                      => '20',
		'content_typography'                => array(
			0 => array(
				'custom'         => '',
				'google'         => '0',
				'font-family'    => 'Lato',
				'font-weight'    => '',
				'font-style'     => '',
				'font-subset'    => '',
				'text-transform' => '',
				'font-size'      => '',
				'tablet'         => array(
					'font-size'   => '',
					'line-height' => '',
				),
				'mobile'         => array(
					'font-size'   => '',
					'line-height' => '',
				),
				'line-height'    => '',
				'color'          => '',
			),
		),
		'copyrights_left_text'              => '',
		'entities_typography'               => array(
			0 => array(
				'custom'         => '',
				'google'         => '0',
				'font-family'    => '',
				'font-weight'    => '600',
				'font-style'     => '',
				'font-subset'    => '',
				'text-transform' => '',
				'line-height'    => '',
				'tablet'         => array(
					'line-height' => '',
				),
				'mobile'         => array(
					'line-height' => '',
				),
				'color'          => '#333333',
				'hover'          => array(
					'color' => '#f66551',
				),
			),
		),
		'footer_color_scheme'               => 'default',
		'header_typography'                 => array(
			0 => array(
				'custom'         => '',
				'google'         => '0',
				'font-family'    => '',
				'font-weight'    => '',
				'font-style'     => '',
				'font-subset'    => '',
				'text-transform' => '',
				'font-size'      => '15',
				'tablet'         => array(
					'font-size'   => '',
					'line-height' => '',
				),
				'mobile'         => array(
					'font-size'   => '',
					'line-height' => '',
				),
				'line-height'    => '',
				'color'          => '',
				'hover'          => array(
					'color' => '',
				),
				'active'         => array(
					'color' => '',
				),
			),
		),
		'links_color'                       => array(
			'idle'       => '#333333',
			'hover'      => '#f76551',
			'css_output' => '1',
		),
		'primary_color'                     => array(
			'idle'       => '#f76551',
			'css_output' => '1',
		),
		'secondary_color'                   => array(
			'idle'       => '#00b2ff',
			'css_output' => '1',
		),
		'sevom_color'                     => array(
			'idle'       => '#ffffff',
			'css_output' => '1',
		),
		'site_width'                        => '1420',
		'title_typography'                  => array(
			0 => array(
				'custom'         => '',
				'google'         => '0',
				'font-family'    => '',
				'font-weight'    => '600',
				'font-style'     => '',
				'font-subset'    => '',
				'text-transform' => '',
				'line-height'    => '',
				'tablet'         => array(
					'line-height' => '',
				),
				'mobile'         => array(
					'line-height' => '',
				),
				'color'          => '#333333',
			),
		),
	)
);
