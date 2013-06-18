<?php
/*
Plugin Name: Trust Form Google Analytics virtual tracking
Plugin URI:
Description: Trust Form で確認画面への移動時、送信時のバーチャルページビューを取得出来るようになります。
Author: Hidekazu　Ishikawa
Author URI:
Version: 1.0
*/

add_action( 'wp_footer', 'add_gavt' );
function add_gavt() {
	wp_register_script( 'gavtjs' , plugins_url().'/trust-form-gavt/trust-form-gavt.js', array('jquery'), '20130618' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'gavtjs' );
}

// 以下ショートコードがある場合だけ適応
// add_action('wp_print_scripts', array(&$this,'addgavt'));
// function addgavt() {
// 	if (!hasShortCode('trust-form'))
// 		return;
// 	wp_register_script( 'gavtjs' , plugins_url().'/trust-form-gavt/trust-form-gavt.js', array('jquery'), '20130618' );
// 	wp_enqueue_script( 'jquery' );
// 	wp_enqueue_script( 'gavtjs' );
// }

// function hasShortcode($shortcode) {
// 	global $wp_query;

// 	$posts   = $wp_query->posts;
// 	$pattern = '/\[' . preg_quote($shortcode) . '[^\]]*\]/im';
// 	$found   = false;
// 	// $hasTeaser = !( is_single() || is_page() );

// 	foreach($posts as $post) {
// 		if (isset($post->post_content)) {
// 			$post_content = $post->post_content;
// 			// if ( $hasTeaser && preg_match('/<!--more(.*?)?-->/', $post_content, $matches) ) {
// 			// 	$content = explode($matches[0], $post_content, 2);
// 			// 	$post_content = $content[0];
// 			// }
// 			if ( !empty($post_content) && preg_match($pattern, $post_content) ) {
// 				$found = true;
// 			}
// 		}
// 		if ( $found )
// 			break;
// 	}
// 	unset($posts);
// 	return $found;
// }