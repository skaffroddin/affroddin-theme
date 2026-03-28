<?php
function affroddin_assets() {
    wp_enqueue_style('affroddin-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('affroddin-main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'affroddin_assets');
