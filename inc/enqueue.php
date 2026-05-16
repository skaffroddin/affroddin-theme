<?php
/**
 * Enqueue scripts and styles.
 */
function affroddin_scripts_and_styles() {
    // Styles
    wp_enqueue_style('affroddin-style', get_template_directory_uri() . '/assets/css/output.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('affroddin-main-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Scripts
    wp_enqueue_script('affroddin-loader', get_template_directory_uri() . '/assets/js/loader.js', array(), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('affroddin-navbar', get_template_directory_uri() . '/assets/js/navbar.js', array(), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('affroddin-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'affroddin_scripts_and_styles');
