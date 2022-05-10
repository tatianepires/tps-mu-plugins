<?php
/*
Plugin Name: Disable XML-RPC
Description: Disable WordPress XML-RPC.
Version:     1.0
Author:      Tatiane Pires
Author URI:  https://tatianepires.com.br
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter('xmlrpc_enabled', '__return_false');