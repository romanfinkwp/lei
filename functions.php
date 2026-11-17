<?php
/**
 * Lei theme functions.
 */

function lei_enqueue_styles() {
	wp_enqueue_style(
		'lei-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lei_enqueue_styles' );

function lei_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
	load_theme_textdomain( 'lei', get_template_directory() . '/languages' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'lei_setup' );

// Disable remote block patterns
add_filter( 'should_load_remote_block_patterns', '__return_false' );

// Register custom block styles
function lei_register_block_styles() {
	register_block_style(
		'core/heading',
		array(
			'name'  => 'lei-text-balance',
			'label' => esc_html__( 'Balance Wrap', 'lei' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lei-text-balance',
			'label' => esc_html__( 'Balance Wrap', 'lei' ),
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'lei-reverse',
			'label' => esc_html__( 'Mobile Reverse', 'lei' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lei-italic',
			'label' => esc_html__( 'Italic', 'lei' ),
		)
	);
}
add_action( 'init', 'lei_register_block_styles' );

// Register pattern categories
function lei_register_pattern_categories() {
	register_block_pattern_category( 'lei', array( 'label' => __( 'Lei', 'lei' ) ) );
}
add_action( 'init', 'lei_register_pattern_categories' );
