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
            'Batch Import',
            'Batch Import',
            'manage_options',
            'wbip-batch-import',
            [$this, 'render_page'],
            'dashicons-database-import',
            30
        );
    }

    public function render_page()
    {
        ?>
        <div class="wrap">
            <h1>WordPress Batch Import</h1>

            <p>
                Import thousands of URLs using AJAX queue processing.
            </p>

            <textarea
                id="wbip-links"
                rows="12"
                style="width:100%;"
                placeholder="Paste one URL per line"></textarea>

            <br><br>

            <button
                class="button button-primary"
                id="wbip-start">
                Start Import
            </button>

            <div
                id="wbip-progress"
                style="margin-top:20px;">
            </div>

        </div>
        <?php
    }
}
