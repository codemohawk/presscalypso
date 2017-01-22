<?php

/*
Plugin Name: Calypso WordPress Admin Theme
Plugin URI: http://codemohawk.com.br/cmtalks/voce-se-incomoda-com-dashboard-do-wordpress-resolvi-isso-de-uma-forma-bem-simples/
Description: A experiência do WordPress.com agora no seu WordPress SelfHosted
Author: CodeMohawk
Version: 1.0 Beta
Author URI: http://codemohawk.com.br
*/

function calypsowp() {
	global $wp_version;
    if ( $wp_version == 4.6 ) {
	wp_enqueue_style('gridicons', plugins_url('css/gridicon.css', __FILE__));
    wp_enqueue_style('calypso-wp', plugins_url('css/calypso-wp.css', __FILE__));
    } if ( $wp_version == 4.7 ) {
	wp_enqueue_style('gridicons', plugins_url('css/gridicon.css', __FILE__));
    wp_enqueue_style('calypso-wp', plugins_url('css/calypso-wp-4.7.css', __FILE__));
    }
}

add_action('admin_enqueue_scripts', 'calypsowp');
add_action('login_enqueue_scripts', 'calypsowp');  

?>