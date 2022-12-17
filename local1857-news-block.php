<?php
/**
 * Plugin Name:       Local 1857 Recent News Block
 * Description:       Block that displays the last five news posts
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Two Dogs Web Development
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       local1857-news-block
 *
 * @package           local1857
 */

function local1857_local1857_news_block_block_init() {
	register_block_type( __DIR__ . '/build/core-block' );
	register_block_type( __DIR__ . '/build/overall-block' );
}
add_action( 'init', 'local1857_local1857_news_block_block_init' );
