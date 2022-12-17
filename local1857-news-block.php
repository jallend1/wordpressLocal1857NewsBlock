<?php
/**
 * Plugin Name:       Local 1857 Recent News Block
 * Description:       Block that displays the last five news posts
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       local1857-news-block
 *
 * @package           local1857
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function local1857_local1857_news_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'local1857_local1857_news_block_block_init' );
