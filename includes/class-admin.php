<?php

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
        ?>
        <div class="wrap">
            <h1>WP Queue Importer</h1>

            <p>Import thousands of URLs using batch processing.</p>

            <textarea
                id="wbip-links"
                rows="15"
                style="width:100%;"
                placeholder="Paste one URL per line"></textarea>

            <br><br>

            <button
                id="wbip-start"
                class="button button-primary">
                Start Import
            </button>

            <div id="wbip-progress" style="margin-top:20px;"></div>
        </div>
        <?php
    }
}
