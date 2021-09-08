<?php
/*
Plugin Name: Hide login form
Description: Add CSS to hide login fields
Version:     1.0
Author:      Tatiane Pires
Author URI:  https://tatianepires.com.br
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function tps_login_stylesheet() {
    wp_enqueue_style( 'tps-custom-login', content_url() . '/mu-plugins/add-login-style/css/tps-login.css' );
}
add_action( 'login_enqueue_scripts', 'tps_login_stylesheet' );
