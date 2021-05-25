<?php

/**
* Plugin Name: WP Dashboard Messages
* Description: Show Messages on the WP Admin Dashboard.
* Author: Velyana Petrova
* Version: 1.0
*/

namespace DashboardMessages;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}

if ( is_admin() || defined( 'DOING_AJAX' ) ) {

	require_once __DIR__ . DIRECTORY_SEPARATOR . 'include/autoload.php';

	Core\Core::instance( __FILE__ );
	PostType\PostTypeDashboardMessage::instance();
	Admin\Admin::instance();
}
