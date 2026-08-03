<?php

defined('ABSPATH') || exit;

class WBIP_Admin
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerMenu']);
    }

    public function registerMenu(): void
    {
        add_menu_page(
            'WordPress Admin Starter',
            'WP Starter',
            'manage_options',
            'wbip-starter',
            [$this, 'renderPage'],
            'dashicons-admin-tools',
            60
        );
    }

    public function renderPage(): void
    {
        ?>
        <div class="wrap">
            <h1>🚀 WordPress Admin Starter</h1>

            <p>If you can read this page, the plugin is working correctly.</p>
        </div>
        <?php
    }
}
