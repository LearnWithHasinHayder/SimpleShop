<?php


include_once("inc/customizer/kirki-installer.php");
include_once("inc/customizer/customizer-main.php");

function simpleshop_setup() {
	
	load_theme_textdomain( 'simpleshop', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'simpleshop' ),
	) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'simpleshop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}

add_action( 'after_setup_theme', 'simpleshop_setup' );

function simpleshop_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'simpleshop_add_editor_styles' );

function simpleshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simpleshop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'simpleshop_content_width', 0 );

function simpleshop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'simpleshop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'simpleshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'simpleshop_widgets_init' );

function simpleshop_assets(){

	wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900');
	wp_enqueue_style('bootstrap-css',get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('fontawesome-css',get_theme_file_uri('/assets/vendor/font-awesome/css/font-awesome.min.css'));
	wp_enqueue_style('bicon-css',get_theme_file_uri('/assets/vendor/bicon/css/bicon.css'));
	wp_enqueue_style('simpleshop-theme-css',get_theme_file_uri('/assets/css/main.css'),null,time());
	wp_enqueue_style('simpleshop-css',get_stylesheet_uri());

	wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.min.js'),['jquery'],'default',true);
	wp_enqueue_script('popper-js',get_theme_file_uri('/assets/vendor/popper.min.js'),['jquery'],'default',true);
	wp_enqueue_script('simpleshop-js',get_theme_file_uri('/assets/js/scripts.js'),['jquery'],time(),true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','simpleshop_assets');
