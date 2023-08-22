<?php
/**
 * Arnulfo Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Arnulfo_Theme
 * @since Arnulfo Theme 1.0
 */


if ( ! function_exists( 'arnulfo_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Arnulfo Theme 1.0
	 *
	 * @return void
	 */
	function arnulfo_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'arnulfo_theme_support' );

if ( ! function_exists( 'arnulfo_theme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Arnulfo Theme 1.0
	 *
	 * @return void
	 */
	function arnulfo_theme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'arnulfotheme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'arnulfotheme-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'arnulfo_theme_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';


if ( ! function_exists( 'my_excerpt_length' ) ) :

	/**
	 * Custom excerpt lenght.
	 *
	 * @since Arnulfo Theme 1.0
	 *
	 * @return void
	 */
	function my_excerpt_length($length){
		 return 24; 
	} 

endif;

add_filter('excerpt_length', 'my_excerpt_length');

function custom_render_block_core_navigation (string $block_content, array $block)
{
	if (
		$block['blockName'] === 'core/navigation' && 
		!is_admin() &&
		!wp_is_json_request()
	) {
		return preg_replace('/\<svg width(.*?)\<\/svg\>/', '<i class="fa-solid fa-bars"></i>', $block_content);
	}

	return $block_content;
}

add_filter('render_block', 'custom_render_block_core_navigation', null, 2);