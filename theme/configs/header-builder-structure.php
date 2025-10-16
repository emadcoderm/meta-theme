<?php
/**
 * Default header builder structure
 *
 * @package xts
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

return array(
	'id'      => 'root',
	'type'    => 'root',
	'content' => array(
		0 => array(
			'id'      => 'top-bar',
			'type'    => 'row',
			'content' => array(
				0 => array(
					'id'      => 'column5',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'iu5j41m58yleo2y5p8z7',
							'type'   => 'text',
							'params' => array(
								'content'      => array(
									'id'    => 'content',
									'value' => 'Free Products Delivery On $ 399 And More',
									'type'  => 'editor',
								),
								'inline'       => array(
									'id'    => 'inline',
									'value' => false,
									'type'  => 'switcher',
								),
								'color_scheme' => array(
									'id'    => 'color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
								'text_color'   => array(
									'id'    => 'text_color',
									'value' => array(
										'r' => 80,
										'g' => 80,
										'b' => 80,
										'a' => 1,
									),
									'type'  => 'color',
								),
								'font_size'    => array(
									'id'    => 'font_size',
									'value' => 's',
									'type'  => 'select',
								),
								'css_class'    => array(
									'id'    => 'css_class',
									'value' => '',
									'type'  => 'text',
								),
							),
						),
					),
				),
				1 => array(
					'id'      => 'column6',
					'type'    => 'column',
					'content' => array(),
				),
				2 => array(
					'id'      => 'column7',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'rncqzbzizz93egds7fgm',
							'type'   => 'social_buttons',
							'params' => array(
								'type'         => array(
									'id'    => 'type',
									'value' => 'follow',
									'type'  => 'selector',
								),
								'color_scheme' => array(
									'id'    => 'color_scheme',
									'value' => 'dark',
									'type'  => 'selector',
								),
								'size'         => array(
									'id'    => 'size',
									'value' => 's',
									'type'  => 'selector',
								),
								'style'        => array(
									'id'    => 'style',
									'value' => 'default',
									'type'  => 'selector',
								),
								'shape'        => array(
									'id'    => 'shape',
									'value' => 'round',
									'type'  => 'selector',
								),
							),
						),
					),
				),
				3 => array(
					'id'      => 'column_mobile1',
					'type'    => 'column',
					'content' => array(),
				),
			),
			'params'  => array(
				'flex_layout'            => array(
					'id'    => 'flex_layout',
					'value' => 'stretch-center',
					'type'  => 'selector',
				),
				'height'                 => array(
					'id'    => 'height',
					'value' => 40,
					'type'  => 'slider',
				),
				'mobile_height'          => array(
					'id'    => 'mobile_height',
					'value' => 40,
					'type'  => 'slider',
				),
				'align_dropdowns_bottom' => array(
					'id'    => 'align_dropdowns_bottom',
					'value' => true,
					'type'  => 'switcher',
				),
				'hide_desktop'           => array(
					'id'    => 'hide_desktop',
					'value' => false,
					'type'  => 'switcher',
				),
				'hide_mobile'            => array(
					'id'    => 'hide_mobile',
					'value' => true,
					'type'  => 'switcher',
				),
				'sticky'                 => array(
					'id'    => 'sticky',
					'value' => false,
					'type'  => 'switcher',
				),
				'sticky_height'          => array(
					'id'    => 'sticky_height',
					'value' => 40,
					'type'  => 'slider',
				),
				'color_scheme'           => array(
					'id'    => 'color_scheme',
					'value' => 'dark',
					'type'  => 'selector',
				),
				'shadow'                 => array(
					'id'    => 'shadow',
					'value' => false,
					'type'  => 'switcher',
				),
				'background'             => array(
					'id'    => 'background',
					'value' => array(
						'background-color' => array(
							'r' => 248,
							'g' => 248,
							'b' => 248,
							'a' => 1,
						),
					),
					'type'  => 'bg',
				),
				'border'                 => array(
					'id'    => 'border',
					'value' => '',
					'type'  => 'border',
				),
			),
		),
		1 => array(
			'id'      => 'general-header',
			'type'    => 'row',
			'content' => array(
				0 => array(
					'id'      => 'column8',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'z8xj3185wc1z6h4y1tcp',
							'type'   => 'logo',
							'params' => array(
								'image'        => array(
									'id'    => 'image',
									'value' => array(
										'id'     => 2972,
										'url'    => 'https://space.xtemos.com/dummy/antares/wp-content/uploads/sites/12/2020/11/antares-mine-color-logo.svg',
										'width'  => 0,
										'height' => 0,
									),
									'type'  => 'image',
								),
								'width'        => array(
									'id'    => 'width',
									'value' => 150,
									'type'  => 'slider',
								),
								'sticky_image' => array(
									'id'    => 'sticky_image',
									'value' => '',
									'type'  => 'image',
								),
								'sticky_width' => array(
									'id'    => 'sticky_width',
									'value' => 150,
									'type'  => 'slider',
								),
								'logo_notice'  => array(
									'id'    => 'logo_notice',
									'value' => '',
									'type'  => 'notice',
								),
							),
						),
					),
				),
				1 => array(
					'id'      => 'column9',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'spvb2hmatzxxowy79f3f',
							'type'   => 'space',
							'params' => array(
								'direction' => array(
									'id'    => 'direction',
									'value' => 'h',
									'type'  => 'selector',
								),
								'width'     => array(
									'id'    => 'width',
									'value' => 40,
									'type'  => 'slider',
								),
								'css_class' => array(
									'id'    => 'css_class',
									'value' => '',
									'type'  => 'text',
								),
							),
						),
						1 => array(
							'id'     => 'obj0a6uv4bj0qfcjkylj',
							'type'   => 'search',
							'params' => array(
								'display'             => array(
									'id'    => 'display',
									'value' => 'form',
									'type'  => 'selector',
								),
								'search_style'        => array(
									'id'    => 'search_style',
									'value' => 'icon-alt',
									'type'  => 'selector',
								),
								'form_color_scheme'   => array(
									'id'    => 'form_color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
								'icon_style'          => array(
									'id'    => 'icon_style',
									'value' => 'icon',
									'type'  => 'selector',
								),
								'categories_dropdown' => array(
									'id'    => 'categories_dropdown',
									'value' => true,
									'type'  => 'switcher',
								),
								'icon_type'           => array(
									'id'    => 'icon_type',
									'value' => 'default',
									'type'  => 'selector',
								),
								'custom_icon'         => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
								'ajax'                => array(
									'id'    => 'ajax',
									'value' => true,
									'type'  => 'switcher',
								),
								'ajax_result_count'   => array(
									'id'    => 'ajax_result_count',
									'value' => 20,
									'type'  => 'slider',
								),
								'post_type'           => array(
									'id'    => 'post_type',
									'value' => 'product',
									'type'  => 'selector',
								),
								'color_scheme'        => array(
									'id'    => 'color_scheme',
									'value' => 'dark',
									'type'  => 'selector',
								),
							),
						),
						2 => array(
							'id'     => '75kqbrqofh4m2aahqcmn',
							'type'   => 'space',
							'params' => array(
								'direction' => array(
									'id'    => 'direction',
									'value' => 'h',
									'type'  => 'selector',
								),
								'width'     => array(
									'id'    => 'width',
									'value' => 40,
									'type'  => 'slider',
								),
								'css_class' => array(
									'id'    => 'css_class',
									'value' => '',
									'type'  => 'text',
								),
							),
						),
					),
				),
				2 => array(
					'id'      => 'column10',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => '75459u4dzc2n6i18lej8',
							'type'   => 'compare',
							'params' => array(
								'style'       => array(
									'id'    => 'style',
									'value' => 'icon-text',
									'type'  => 'selector',
								),
								'design'      => array(
									'id'    => 'design',
									'value' => 'default',
									'type'  => 'selector',
								),
								'icon_style'  => array(
									'id'    => 'icon_style',
									'value' => 'default',
									'type'  => 'selector',
								),
								'custom_icon' => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
							),
						),
						1 => array(
							'id'     => '1y3eka812a5dts8ywtrx',
							'type'   => 'wishlist',
							'params' => array(
								'style'       => array(
									'id'    => 'style',
									'value' => 'icon-text',
									'type'  => 'selector',
								),
								'design'      => array(
									'id'    => 'design',
									'value' => 'default',
									'type'  => 'selector',
								),
								'icon_style'  => array(
									'id'    => 'icon_style',
									'value' => 'default',
									'type'  => 'selector',
								),
								'custom_icon' => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
							),
						),
						2 => array(
							'id'     => '6ee5c94zq0vc8b9ix4g3',
							'type'   => 'my-account',
							'params' => array(
								'style'         => array(
									'id'    => 'style',
									'value' => 'icon-text',
									'type'  => 'selector',
								),
								'icon_style'    => array(
									'id'    => 'icon_style',
									'value' => 'default',
									'type'  => 'selector',
								),
								'custom_icon'   => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
								'with_username' => array(
									'id'    => 'with_username',
									'value' => false,
									'type'  => 'switcher',
								),
								'login_form'    => array(
									'id'    => 'login_form',
									'value' => true,
									'type'  => 'switcher',
								),
								'position'      => array(
									'id'    => 'position',
									'value' => 'right',
									'type'  => 'selector',
								),
								'color_scheme'  => array(
									'id'    => 'color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
							),
						),
						3 => array(
							'id'     => '6loowl3jt0xd5ysydvu2',
							'type'   => 'cart',
							'params' => array(
								'widget_type'  => array(
									'id'    => 'widget_type',
									'value' => 'side',
									'type'  => 'selector',
								),
								'color_scheme' => array(
									'id'    => 'color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
								'position'     => array(
									'id'    => 'position',
									'value' => 'right',
									'type'  => 'selector',
								),
								'style'        => array(
									'id'    => 'style',
									'value' => 'icon-text',
									'type'  => 'selector',
								),
								'design'       => array(
									'id'    => 'design',
									'value' => 'default',
									'type'  => 'selector',
								),
								'icon_style'   => array(
									'id'    => 'icon_style',
									'value' => 'cart',
									'type'  => 'selector',
								),
								'custom_icon'  => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
							),
						),
					),
				),
				3 => array(
					'id'      => 'column_mobile2',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'sbvhnsyxlwfx3kmp7gx6',
							'type'   => 'burger',
							'params' => array(
								'menu_id'      => array(
									'id'    => 'menu_id',
									'value' => 'main-navigation',
									'type'  => 'select',
								),
								'style'        => array(
									'id'    => 'style',
									'value' => 'icon',
									'type'  => 'selector',
								),
								'icon_type'    => array(
									'id'    => 'icon_type',
									'value' => 'default',
									'type'  => 'selector',
								),
								'custom_icon'  => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
								'position'     => array(
									'id'    => 'position',
									'value' => 'left',
									'type'  => 'selector',
								),
								'color_scheme' => array(
									'id'    => 'color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
								'search_form'  => array(
									'id'    => 'search_form',
									'value' => true,
									'type'  => 'switcher',
								),
							),
						),
					),
				),
				4 => array(
					'id'      => 'column_mobile3',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => '8av8i4b4hmjomwr2pq6e',
							'type'   => 'logo',
							'params' => array(
								'image'        => array(
									'id'    => 'image',
									'value' => array(
										'id'     => 2972,
										'url'    => 'https://space.xtemos.com/dummy/antares/wp-content/uploads/sites/12/2020/11/antares-mine-color-logo.svg',
										'width'  => 0,
										'height' => 0,
									),
									'type'  => 'image',
								),
								'width'        => array(
									'id'    => 'width',
									'value' => 120,
									'type'  => 'slider',
								),
								'sticky_image' => array(
									'id'    => 'sticky_image',
									'value' => '',
									'type'  => 'image',
								),
								'sticky_width' => array(
									'id'    => 'sticky_width',
									'value' => 150,
									'type'  => 'slider',
								),
								'logo_notice'  => array(
									'id'    => 'logo_notice',
									'value' => '',
									'type'  => 'notice',
								),
							),
						),
					),
				),
				5 => array(
					'id'      => 'column_mobile4',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => 'pi4rwtei9h6j1o5kegw9',
							'type'   => 'cart',
							'params' => array(
								'widget_type'  => array(
									'id'    => 'widget_type',
									'value' => 'side',
									'type'  => 'selector',
								),
								'color_scheme' => array(
									'id'    => 'color_scheme',
									'value' => 'inherit',
									'type'  => 'selector',
								),
								'position'     => array(
									'id'    => 'position',
									'value' => 'right',
									'type'  => 'selector',
								),
								'style'        => array(
									'id'    => 'style',
									'value' => 'icon',
									'type'  => 'selector',
								),
								'design'       => array(
									'id'    => 'design',
									'value' => 'count',
									'type'  => 'selector',
								),
								'icon_style'   => array(
									'id'    => 'icon_style',
									'value' => 'cart',
									'type'  => 'selector',
								),
								'custom_icon'  => array(
									'id'    => 'custom_icon',
									'value' => '',
									'type'  => 'image',
								),
							),
						),
					),
				),
			),
			'params'  => array(
				'flex_layout'            => array(
					'id'    => 'flex_layout',
					'value' => 'stretch-center',
					'type'  => 'selector',
				),
				'height'                 => array(
					'id'    => 'height',
					'value' => 90,
					'type'  => 'slider',
				),
				'mobile_height'          => array(
					'id'    => 'mobile_height',
					'value' => 70,
					'type'  => 'slider',
				),
				'align_dropdowns_bottom' => array(
					'id'    => 'align_dropdowns_bottom',
					'value' => false,
					'type'  => 'switcher',
				),
				'hide_desktop'           => array(
					'id'    => 'hide_desktop',
					'value' => false,
					'type'  => 'switcher',
				),
				'hide_mobile'            => array(
					'id'    => 'hide_mobile',
					'value' => false,
					'type'  => 'switcher',
				),
				'sticky'                 => array(
					'id'    => 'sticky',
					'value' => false,
					'type'  => 'switcher',
				),
				'sticky_height'          => array(
					'id'    => 'sticky_height',
					'value' => 80,
					'type'  => 'slider',
				),
				'color_scheme'           => array(
					'id'    => 'color_scheme',
					'value' => 'dark',
					'type'  => 'selector',
				),
				'shadow'                 => array(
					'id'    => 'shadow',
					'value' => false,
					'type'  => 'switcher',
				),
				'background'             => array(
					'id'    => 'background',
					'value' => '',
					'type'  => 'bg',
				),
				'border'                 => array(
					'id'    => 'border',
					'value' => '',
					'type'  => 'border',
				),
			),
		),
		2 => array(
			'id'      => 'header-bottom',
			'type'    => 'row',
			'content' => array(
				0 => array(
					'id'      => 'column11',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => '5i599mcu7wcnpj8a2vfs',
							'type'   => 'mainmenu',
							'params' => array(
								'menu_style'       => array(
									'id'    => 'menu_style',
									'value' => 'underline-dot',
									'type'  => 'selector',
								),
								'menu_full_height' => array(
									'id'    => 'menu_full_height',
									'value' => true,
									'type'  => 'switcher',
								),
								'menu_align'       => array(
									'id'    => 'menu_align',
									'value' => 'left',
									'type'  => 'selector',
								),
								'menu_items_gap'   => array(
									'id'    => 'menu_items_gap',
									'value' => 'l',
									'type'  => 'selector',
								),
							),
						),
					),
				),
				1 => array(
					'id'      => 'column12',
					'type'    => 'column',
					'content' => array(),
				),
				2 => array(
					'id'      => 'column13',
					'type'    => 'column',
					'content' => array(
						0 => array(
							'id'     => '4pjlvjm1oox6waurevgr',
							'type'   => 'infobox',
							'params' => array(
								'content_align'          => array(
									'id'    => 'content_align',
									'value' => 'left',
									'type'  => 'selector',
								),
								'icon_position'          => array(
									'id'    => 'icon_position',
									'value' => 'side',
									'type'  => 'selector',
								),
								'icon_vertical_position' => array(
									'id'    => 'icon_vertical_position',
									'value' => 'start',
									'type'  => 'selector',
								),
								'image'                  => array(
									'id'    => 'image',
									'value' => array(
										'id'     => 2870,
										'url'    => 'https://space.xtemos.com/dummy/antares/wp-content/uploads/sites/12/2020/11/antares-svg-safe.svg',
										'width'  => 0,
										'height' => 0,
									),
									'type'  => 'image',
								),
								'image_size'             => array(
									'id'    => 'image_size',
									'value' => 'custom',
									'type'  => 'select',
								),
								'image_width'            => array(
									'id'    => 'image_width',
									'value' => '37',
									'type'  => 'text',
								),
								'image_height'           => array(
									'id'    => 'image_height',
									'value' => '31',
									'type'  => 'text',
								),
								'image_gap'              => array(
									'id'    => 'image_gap',
									'value' => 'm',
									'type'  => 'select',
								),
								'title'                  => array(
									'id'    => 'title',
									'value' => 'Save:',
									'type'  => 'text',
								),
								'without_title_spacing'  => array(
									'id'    => 'without_title_spacing',
									'value' => true,
									'type'  => 'switcher',
								),
								'title_text_size'        => array(
									'id'    => 'title_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'title_color_presets'    => array(
									'id'    => 'title_color_presets',
									'value' => 'default',
									'type'  => 'select',
								),
								'title_tag'              => array(
									'id'    => 'title_tag',
									'value' => 'h4',
									'type'  => 'select',
								),
								'subtitle'               => array(
									'id'    => 'subtitle',
									'value' => '',
									'type'  => 'text',
								),
								'subtitle_text_size'     => array(
									'id'    => 'subtitle_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'subtitle_color_presets' => array(
									'id'    => 'subtitle_color_presets',
									'value' => 'default',
									'type'  => 'select',
								),
								'description'            => array(
									'id'    => 'description',
									'value' => 'Online payment',
									'type'  => 'textarea',
								),
								'description_text_size'  => array(
									'id'    => 'description_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'description_color_presets' => array(
									'id'    => 'description_color_presets',
									'value' => 'primary',
									'type'  => 'select',
								),
								'infobox_link'           => array(
									'id'    => 'infobox_link',
									'value' => '',
									'type'  => 'text',
								),
							),
						),
						1 => array(
							'id'     => 'afg62s9co76lkf5azdl2',
							'type'   => 'infobox',
							'params' => array(
								'content_align'          => array(
									'id'    => 'content_align',
									'value' => 'left',
									'type'  => 'selector',
								),
								'icon_position'          => array(
									'id'    => 'icon_position',
									'value' => 'side',
									'type'  => 'selector',
								),
								'icon_vertical_position' => array(
									'id'    => 'icon_vertical_position',
									'value' => 'start',
									'type'  => 'selector',
								),
								'image'                  => array(
									'id'    => 'image',
									'value' => array(
										'id'     => 2871,
										'url'    => 'https://space.xtemos.com/dummy/antares/wp-content/uploads/sites/12/2020/11/antares-svg-support.svg',
										'width'  => 0,
										'height' => 0,
									),
									'type'  => 'image',
								),
								'image_size'             => array(
									'id'    => 'image_size',
									'value' => 'custom',
									'type'  => 'select',
								),
								'image_width'            => array(
									'id'    => 'image_width',
									'value' => '37',
									'type'  => 'text',
								),
								'image_height'           => array(
									'id'    => 'image_height',
									'value' => '31',
									'type'  => 'text',
								),
								'image_gap'              => array(
									'id'    => 'image_gap',
									'value' => 'm',
									'type'  => 'select',
								),
								'title'                  => array(
									'id'    => 'title',
									'value' => 'Support 24:',
									'type'  => 'text',
								),
								'without_title_spacing'  => array(
									'id'    => 'without_title_spacing',
									'value' => true,
									'type'  => 'switcher',
								),
								'title_text_size'        => array(
									'id'    => 'title_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'title_color_presets'    => array(
									'id'    => 'title_color_presets',
									'value' => 'default',
									'type'  => 'select',
								),
								'title_tag'              => array(
									'id'    => 'title_tag',
									'value' => 'h4',
									'type'  => 'select',
								),
								'subtitle'               => array(
									'id'    => 'subtitle',
									'value' => '',
									'type'  => 'text',
								),
								'subtitle_text_size'     => array(
									'id'    => 'subtitle_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'subtitle_color_presets' => array(
									'id'    => 'subtitle_color_presets',
									'value' => 'default',
									'type'  => 'select',
								),
								'description'            => array(
									'id'    => 'description',
									'value' => '+1 312-334-0612',
									'type'  => 'textarea',
								),
								'description_text_size'  => array(
									'id'    => 'description_text_size',
									'value' => 's',
									'type'  => 'select',
								),
								'description_color_presets' => array(
									'id'    => 'description_color_presets',
									'value' => 'primary',
									'type'  => 'select',
								),
								'infobox_link'           => array(
									'id'    => 'infobox_link',
									'value' => '',
									'type'  => 'text',
								),
							),
						),
					),
				),
				3 => array(
					'id'      => 'column_mobile5',
					'type'    => 'column',
					'content' => array(),
				),
			),
			'params'  => array(
				'flex_layout'            => array(
					'id'    => 'flex_layout',
					'value' => 'stretch-center',
					'type'  => 'selector',
				),
				'height'                 => array(
					'id'    => 'height',
					'value' => 60,
					'type'  => 'slider',
				),
				'mobile_height'          => array(
					'id'    => 'mobile_height',
					'value' => 50,
					'type'  => 'slider',
				),
				'align_dropdowns_bottom' => array(
					'id'    => 'align_dropdowns_bottom',
					'value' => true,
					'type'  => 'switcher',
				),
				'hide_desktop'           => array(
					'id'    => 'hide_desktop',
					'value' => false,
					'type'  => 'switcher',
				),
				'hide_mobile'            => array(
					'id'    => 'hide_mobile',
					'value' => true,
					'type'  => 'switcher',
				),
				'sticky'                 => array(
					'id'    => 'sticky',
					'value' => false,
					'type'  => 'switcher',
				),
				'sticky_height'          => array(
					'id'    => 'sticky_height',
					'value' => 45,
					'type'  => 'slider',
				),
				'color_scheme'           => array(
					'id'    => 'color_scheme',
					'value' => 'dark',
					'type'  => 'selector',
				),
				'shadow'                 => array(
					'id'    => 'shadow',
					'value' => false,
					'type'  => 'switcher',
				),
				'background'             => array(
					'id'    => 'background',
					'value' => array(),
					'type'  => 'bg',
				),
				'border'                 => array(
					'id'    => 'border',
					'value' => '',
					'type'  => 'border',
				),
			),
		),
	),
);

