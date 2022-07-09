<?php
/**
 * @package Hello_Dolly
 * @version 1.0.0
 */
/*
Plugin Name: Course Extension
Plugin URI: https://www.facebook.com/thanhvan250298/
Description: This plugin includes more information for a course
Author: Harry
Version: 1.0.0
Author URI: https://www.facebook.com/thanhvan250298/
*/
define('TEXT_DOMAIN','KOKO');
require plugin_dir_path( __FILE__ ) . 'custom-posttype/course.php';
require plugin_dir_path( __FILE__ ) . 'inc/custom-roles/teacher.php';
require plugin_dir_path( __FILE__ ) . 'inc/shortcode/courses-list.php';
require plugin_dir_path( __FILE__ ) . 'inc/ajax/loadmore.php';
require plugin_dir_path( __FILE__ ) . 'inc/breadcrumb.php';


function course_extension_style() {
    wp_enqueue_style( 'main-style', plugins_url('assets/css/style.css',__FILE__ ), null, null);
}
add_action('wp_enqueue_scripts', 'course_extension_style');

function course_extension_script() {
    wp_enqueue_script( 'main-script', plugins_url('assets/js/main.min.js',__FILE__ ), array( 'jquery'), null);
    wp_localize_script( 'main-script', 'ajaxObject', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));  
}
add_action('wp_enqueue_scripts', 'course_extension_script');


