<?php
/*
Plugin Name:Wbdb work post
Plugin URI: http://wordpress.org/
Description: wbdb work of the post
Version: 2.0.0
Author: Yuri Zheludkov


*/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
//
define( 'SM_PATH', plugin_dir_path(__FILE__)   );
// setup
//includes
include(SM_PATH.'/inc/activation.php');
include(SM_PATH.'/inc/admin/init.php');
//hook
register_activation_hook( __FILE__, 'sm_plugtestes_activation' );
add_action( 'init', 'sm_register_post_type' );
//shortcode
