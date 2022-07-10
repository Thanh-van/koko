<?php
// Add custom Theme Functions here
function mh_load_theme_style() {
	
	//disable zxcvbn.min.js in wordpress
	if ( !is_user_logged_in() ) {
	wp_dequeue_script('wc-password-strength-meter');
    wp_deregister_script('wc-password-strength-meter');
	}
	
	
}
add_action( 'wp_enqueue_scripts', 'mh_load_theme_style', 99998 );
function disable_plugin_updates( $value ) {
  if ( isset($value) && is_object($value) ) {
    if ( isset( $value->response['nextend-smart-slider3-pro/nextend-smart-slider3-pro.php'] ) ) {
      unset( $value->response['nextend-smart-slider3-pro/nextend-smart-slider3-pro.php'] );
    }
    if ( isset( $value->response['woocommerce/woocommerce.php'] ) ) {
   //   unset( $value->response['woocommerce/woocommerce.php'] );
    }
if ( isset( $value->response['ar-contactus/ar-contactus.php'] ) ) {
      unset( $value->response['ar-contactus/ar-contactus.php'] );
    }  

  }
  return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
add_action('admin_enqueue_scripts', 'ds_admin_theme_style');
add_action('login_enqueue_scripts', 'ds_admin_theme_style');
function ds_admin_theme_style() {
      //  echo '<style>.notice, div.error,  .error, .ui.red.message { display: none; }</style>';
    
}

// Theme Style
if (!function_exists('koko_style')) {
  function koko_style() {
      wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . "/assets/css/koko.min.css", null, null);
  }
  add_action('wp_enqueue_scripts', 'koko_style');
}

// Theme Style
if (!function_exists('koko_js')) {
  function koko_js() {
      wp_enqueue_script( 'theme-style', get_stylesheet_directory_uri() . "/assets/js/koko.min.js", array('jquery'), null);
  }
  add_action('wp_enqueue_scripts', 'koko_js');
}

