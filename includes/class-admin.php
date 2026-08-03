ن<?php

if (!defined('ABSPATH')) {
    exit;
}

class WBIP_Admin
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'register_menu']);
    }

    public function register_menu()
    {
        add_menu_page(
            'WP Queue Importer',
            'WP Queue Importer',
            'manage_options',
            'wp-queue-importer',
            [$this, 'render_page'],
            'dashicons-database-import',
            30
        );
    }

    public function render_page()
    {
        require WBIP_PATH . 'templates/admin-page.php';
    }
}
