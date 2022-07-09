<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Harry Style
Plugin URI: https://www.facebook.com/thanhvan250298/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Harry
Version: 1.7.2
Author URI: https://www.facebook.com/thanhvan250298/
*/

/* Enqueues the external CSS file */
add_action( 'wp_enqueue_scripts', 'harry_external_styles' );
function harry_external_styles() {
 
    wp_enqueue_style( 'harry_external_styles1', plugins_url( '/assets/css/style_01.css', __FILE__ ) );
    wp_enqueue_style( 'harry_external_styles2', plugins_url( '/assets/css/style_02.css', __FILE__ ) );
    wp_enqueue_style( 'harry_external_styles3', plugins_url( '/assets/css/style_03.css', __FILE__ ) );
    wp_enqueue_style( 'harry_external_styles4', plugins_url( '/assets/css/style_04.css', __FILE__ ) );
    wp_enqueue_style( 'harry_external_styles5', plugins_url( '/assets/css/style_05.css', __FILE__ ) );
}