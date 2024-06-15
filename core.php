<?php
/*
Plugin Name: nrp
Plugin URI: wferwe
Description: محبوب ترین ،تازه ترین،پربازدیدن ترین مطالب
Version: 1.0.0
Author: moham madhossein aalipor
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later

*/
defined('ABSPATH') || exit;
define('nrp_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('nrp_PLUGIN_URL', plugin_dir_url(__FILE__));
include_once nrp_PLUGIN_DIR . 'view/front/nrp-html.php';
function nrp_register_assets()
{
    //css
    wp_enqueue_style('nrp-style', nrp_PLUGIN_URL . 'assets/css/style.css');
    //js
    wp_enqueue_script('nrp-main', nrp_PLUGIN_URL . 'assets/js/main.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nrp_register_assets');
if (!is_admin()) {

    add_filter('widget_text', 'do_shortcode', 11);
}
