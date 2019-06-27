<?php

define( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', 'simpleshop_customizer_settings' );
define( 'SIMPLESHOP_CUSTOMIZER_PANEL_ID', 'simpleshop_customizer_panel' );

if ( class_exists( 'Kirki' ) ) {
	Kirki::add_config( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
		'capability'  => 'edit_theme_options',
		'option_type' => 'theme_mod',
	) );

	Kirki::add_panel( SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
		'priority'    => 240,
		'title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
		'description' => esc_html__( 'SimpleShop Settings', 'simpleshop' ),
	) );

	Kirki::add_section( 'simpleshop_homepage', array(
		'title'           => esc_html__( 'Homepage Settings', 'kirki' ),
		'panel'           => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
		'priority'        => 160,
		'active_callback' => function () {
			return is_page_template( 'page-templates/homepage.php' );
		}
	) );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_categories',
		'label'    => esc_html__( 'Display Categories Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'            => 'text',
		'settings'        => 'simpleshop_homepage_categories_title',
		'label'           => esc_html__( 'Categories Section Title', 'simpleshop' ),
		'section'         => 'simpleshop_homepage',
		'default'         => esc_html__( 'Shop By Category', 'simpleshop' ),
		'priority'        => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_categories',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_categories_number',
		'label'    => esc_html__( 'Display Numbers Beside Category', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_categories',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'            => 'text',
		'settings'        => 'simpleshop_homepage_categories_col',
		'label'           => esc_html__( 'Number of Columns', 'simpleshop' ),
		'section'         => 'simpleshop_homepage',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_categories',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_product',
		'label'    => esc_html__( 'Display New Arrival Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'simpleshop_homepage_product_title',
		'label'    => esc_html__( 'New Arrival Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_product',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'simpleshop_homepage_product_subtitle',
		'label'    => esc_html__( 'New Arrival Section Sub-Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_product',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_promo',
		'label'    => esc_html__( 'Display Promo Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_popular',
		'label'    => esc_html__( 'Display Popular Products Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'simpleshop_homepage_popular_title',
		'label'    => esc_html__( 'Popular Products Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'Popular Product', 'simpleshop' ),
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_popular',
				'operator' => '==',
				'value'    => true
			]
		]
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_offer',
		'label'    => esc_html__( 'Display Offer Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'switch',
		'settings' => 'simpleshop_homepage_display_flickr',
		'label'    => esc_html__( 'Display Flickr Section', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Display', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
	] );

	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'simpleshop_homepage_flickr_title',
		'label'    => esc_html__( 'Flickr Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'SimpleShop On Flickr', 'simpleshop' ),
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'simpleshop_homepage_display_flickr',
				'operator' => '==',
				'value'    => true
			]
		]
	] );
}