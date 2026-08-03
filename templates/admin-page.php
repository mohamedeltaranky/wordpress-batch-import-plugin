<?php

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="wrap">

    <h1>WP Queue Importer</h1>

    <p>Import thousands of URLs using AJAX queue processing.</p>

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

    <div
        id="wbip-progress"
        style="margin-top:20px;">
    </div>

</div>
