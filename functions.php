<?php
function affroddin_assets() {
    wp_enqueue_style(
        'affroddin-style',
        get_template_directory_uri() . '/assets/css/output.css'
    );
}
add_action('wp_enqueue_scripts', 'affroddin_assets');