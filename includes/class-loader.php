<?php

if (!defined('ABSPATH')) {
    exit;
}

class WBIP_Loader
{
    public static function init()
    {
        require_once WBIP_PATH . 'includes/class-admin.php';
        require_once WBIP_PATH . 'includes/class-ajax.php';
        require_once WBIP_PATH . 'includes/class-importer.php';
        require_once WBIP_PATH . 'includes/class-queue.php';
    }
}
