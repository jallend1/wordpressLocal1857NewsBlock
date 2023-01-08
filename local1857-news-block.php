<?php
/**
 * Plugin Name:       Local 1857 Recent News Block
 * Description:       Block that displays the last five news posts
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Two Dogs Web Development
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       local1857-news-block
 *
 * @package           local1857
 */

function local1857_local1857_news_block_block_init() {
	register_block_type( __DIR__ . '/build/core-block');
	// Renders the overall block that contains headings AND the News Core block
	wp_register_script('local1857-recent-news-block', plugins_url('build/overall-block/index.js', __FILE__), array('wp-blocks', 'wp-element', 'wp-editor'));
	register_block_type( __DIR__ . '/build/overall-block/');
}

add_action( 'init', 'local1857_local1857_news_block_block_init' );

// ****************************************************
// Plugin is intended to accompany a custom theme, and makes reference to the following function from the theme's functions.php file:
// ****************************************************

// function kcls_get_post_image() {
//     global $post;
//     $first_img = '';
//     $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
//     $first_img = $matches [1] [0];
//     if(!$first_img) {
//         $first_img = get_template_directory_uri() . '/assets/images/local1857logo.png';
//     }
//     return $first_img;
// }