<?php
/**
 * Theme functions
 *
 * @package xts
 */

use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

if ( ! function_exists( 'xts_antares_hooks' ) ) {
	/**
	 * Hooks.
	 *
	 * @since 1.0.0
	 */
	function xts_antares_hooks() {
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
		remove_action( 'xts_shop_tools_left_area', 'xts_current_shop_breadcrumbs' );
	}

	add_action( 'wp', 'xts_antares_hooks', 500 );
}

if ( ! function_exists( 'xts_shop_tools_widgets' ) ) {
	/**
	 * Shop tools widgets area.
	 *
	 * @since 1.0.0
	 */
	function xts_shop_tools_widgets() {
		xts_enqueue_js_script( 'shop-tools-filters' );
		?>
		<div class="xts-shop-tools-widgetarea">
			<?php dynamic_sidebar( 'shop-tools-widget-sidebar' ); ?>
		</div>
		<?php
	}

	add_action( 'xts_shop_tools_left_area', 'xts_shop_tools_widgets', 10 );
}

if ( ! function_exists( 'xts_custom_content_after_page_title' ) ) {
	/**
	 * Add content after page title.
	 *
	 * @since 1.0.0
	 */
	function xts_custom_content_after_page_title() {
		if ( ! xts_is_shop_archive() ) {
			return;
		}

		?>
		<div class="container">
			<div class="xts-shop-head-nav row row-spacing-0">
				<div class="col xts-shop-tools">
					<?php xts_current_shop_breadcrumbs(); ?>
				</div>

				<div class="col-auto xts-shop-tools">
					<?php woocommerce_result_count(); ?>
				</div>
			</div>
		</div>
		<?php
	}

	add_action( 'xts_before_site_content_container', 'xts_custom_content_after_page_title', 20 );
}

if ( ! function_exists( 'xts_antares_register_sidebars' ) ) {
	/**
	 * Register widget area.
	 *
	 * @since 1.0.0
	 */
	function xts_antares_register_sidebars() {
		$title_tag = apply_filters( 'xts_widgets_title_tag', 'span' );

		register_sidebar(
			array(
				'name'          => esc_html__( 'Shop tools widget area', 'xts-theme' ),
				'id'            => 'shop-tools-widget-sidebar',
				'description'   => esc_html__( 'Add widgets here to appear in your shop tools widget area.', 'xts-theme' ),
				'before_widget' => '<div id="%1$s" class="widget xts-shop-tools-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<' . $title_tag . ' class="xts-tools-widget-title"><span>',
				'after_title'   => '</span></' . $title_tag . '>',
			)
		);
	}

	add_action( 'widgets_init', 'xts_antares_register_sidebars' );
}

if ( ! function_exists( 'xts_add_mega_menu_element_submenu_indicator_control' ) ) {
	/**
	 * Add submenu indicator control to mega menu element element.
	 *
	 * @since 1.0.0
	 *
	 * @param object $element Element object.
	 */
	function xts_add_mega_menu_element_submenu_indicator_control( $element ) {
		$element->add_control(
			'submenu_indicator_style',
			[
				'label'   => esc_html__( 'Submenu indicator', 'xts-theme' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'chevron' => esc_html__( 'Chevron icon', 'xts-theme' ),
					'plus'    => esc_html__( 'Plus icon', 'xts-theme' ),
				],
				'default' => 'chevron',
			]
		);
	}

	add_action( 'xts_mega_menu_general_style_after_menu_style', 'xts_add_mega_menu_element_submenu_indicator_control' );
}

if ( ! function_exists( 'xts_remove_play_button_border_controls' ) ) {
	/**
	 * Remove border controls.
	 *
	 * @since 1.0.0
	 */
	function xts_remove_play_button_border_controls() {
		remove_action( 'elementor/element/xts_video/style_play_button_section/before_section_end', 'xts_add_video_play_button_border_controls', 10 ); // Does not remove core filters.
	}

	add_action( 'init', 'xts_remove_play_button_border_controls', 50 );
}



function video_popup_wrrapper() {
    ?>

    <div class="video_popup_wrrapper">
		<div class="video_popup_overlay"></div>
		<div class="video_popup_inner"></div>
	</div>

    <?php
}
add_action( 'wp_head', 'video_popup_wrrapper', 400 );
