<?php
/**
 * Plugin Name: UG’s WP Helpers
 * Description: adds taxonomy functionality to pages and Gutenberg block editor
 * Author: YouGee
 * Plugin URI: https://github.com/OohGae/ug-wp-helpers
 * Version: 0.2
 *
 * @package YouGeesLittleHelpers
 */


// add a <cite> tagging function to the Gutenberg editor
function gutenberg_cite_inline_format_enqueue_assets() {
	wp_enqueue_script(
		'gutenberg-cite-inline-format',
		plugins_url( 'ug-wp-helpers.js', __FILE__ ),
		array( 'wp-rich-text', 'wp-element', 'wp-editor', 'wp-block-editor', 'wp-components' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'ug-wp-helpers.js' )
	);
}
add_action( 'enqueue_block_editor_assets', 'gutenberg_cite_inline_format_enqueue_assets' );


// enable categories and tags for pages
function add_categories_tags_to_pages() {
    register_taxonomy_for_object_type('category', 'page');
    register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_categories_tags_to_pages');
