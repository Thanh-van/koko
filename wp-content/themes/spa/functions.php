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
