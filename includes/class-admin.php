<?php

if (!defined('ABSPATH')) {
    exit;
}

class WBIP_Admin
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'register_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_assets']);
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

    public function enqueue_assets($hook)
    {
        if ($hook !== 'toplevel_page_wp-queue-importer') {
            return;
        }

        wp_enqueue_style(
            'wbip-admin',
            WBIP_URL . 'assets/css/admin.css',
            [],
            WBIP_VERSION
        );

        wp_enqueue_script(
            'wbip-admin',
            WBIP_URL . 'assets/js/admin.js',
            ['jquery'],
            WBIP_VERSION,
            true
        );

        wp_localize_script(
            'wbip-admin',
            'wbip',
            [
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce'    => wp_create_nonce('wbip_nonce'),
            ]
        );
    }

    public function render_page()
    {
        require WBIP_PATH . 'templates/admin-page.php';
    }
}
