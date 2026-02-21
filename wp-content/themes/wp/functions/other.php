<?php
/* ===============================================================================
  その他
=============================================================================== */


/*===================================
wp_head 不用な情報を消す
===================================*/
//バージョン
remove_action('wp_head', 'wp_generator');

/*
//遠隔投稿
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

//コメントフィードを削除
remove_action('wp_head', 'feed_links_extra', 3);
*/

// 「wp-block-library-css」を削除
function dequeue_plugins_style() {
	//プラグインIDを指定し解除する
	wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);

// GASP
function add_gsap() {
  wp_enqueue_script(
    'gsap',
    'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
    array(),
    null,
    true
  );
  wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap'), false, true );
}
add_action('wp_enqueue_scripts', 'add_gsap');

function my_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'global' => 'グローバルメニュー'
  ]);
}
add_action('after_setup_theme', 'my_theme_setup');

// Contact Form 7で自動挿入されるタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}