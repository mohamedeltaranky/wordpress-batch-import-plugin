<?php

if (!defined('ABSPATH')) {
    exit;
}

class WBIP_Loader
{
    public static function init()
    {
        require_once WBIP_PATH . 'includes/class-admin.php';

        new WBIP_Admin();
    }
}
