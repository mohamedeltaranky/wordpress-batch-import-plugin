<?php
/**
 * Plugin Name: WordPress Admin Starter
 * Plugin URI: https://github.com/mohamedeltaranky/wordpress-batch-import-plugin
 * Description: Starter plugin for learning professional WordPress plugin development.
 * Version: 1.0.0
 * Author: Mohamed Khalaf Mohamed
 * License: MIT
 * Text Domain: wbip
 */

defined('ABSPATH') || exit;

define('WBIP_VERSION', '1.0.0');
define('WBIP_PATH', plugin_dir_path(__FILE__));
define('WBIP_URL', plugin_dir_url(__FILE__));

require_once WBIP_PATH . 'includes/class-loader.php';

WBIP_Loader::init();
