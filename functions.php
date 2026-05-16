<?php
function affroddin_assets() {
    wp_enqueue_style(
        'affroddin-style',
        get_template_directory_uri() . '/assets/css/output.css'
    );
}
add_action('wp_enqueue_scripts', 'affroddin_assets');

function reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    return ceil($word_count / 200);
}