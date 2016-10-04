<?php
/*  @PACKAGE Wbdb work post
* 	USE: ALL FUNCTION HERE WILL TRIGGER WHEN THIS PLUGIN ACTIVATE.
*	DESCRIPTION: Функция для активации плагина
*/
function sm_mymovies_activation (){

	if(version_compare(get_bloginfo('version'), '4.0.0', '<' )){
		wp_die('To activate this plugin you need to run atleast wordpress 4.0 or above version. update your wordprees version.');
	}

	global $wpdb;
	$createtablesql = "CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."add_posts` (
							  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
							  `post_cont` text,
							  `rating` text,
							  `user_ip` int(11) NOT NULL,
							  PRIMARY KEY (`id`)
							) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

	require(ABSPATH.'/wp-admin/includes/upgrade.php');
	dbDelta($createtablesql);

}

