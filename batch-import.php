<?php
/**
 * Plugin Name: WordPress Batch Import Plugin
 * Plugin URI: https://github.com/mohamedeltaranky/wordpress-batch-import-plugin
 * Description: High-performance batch import plugin for WordPress with AJAX queue processing and resume support.
 * Version: 1.0.0
 * Author: Mohamed Khalaf Mohamed
 * License: MIT
 * Requires PHP: 8.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('WBIP_VERSION', '1.0.0');
define('WBIP_PATH', plugin_dir_path(__FILE__));
define('WBIP_URL', plugin_dir_url(__FILE__));

class WBIP_Plugin {

    public function __construct() {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function init() {
        // Load plugin components
    }
}

new WBIP_Plugin();
