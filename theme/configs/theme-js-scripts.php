<?php
/**
 * JS scripts.
 *
 * @version 1.0
 * @package xts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

return array(
	'shop-tools-filters' => array(
		array(
			'title'     => esc_html__( 'Shop tools filters script', 'xts-theme' ),
			'name'      => 'shop-tools-filters-method',
			'file'      => '/js/scripts/shopToolsFilters',
			'in_footer' => true,
		),
	),
);
