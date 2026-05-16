<?php
/**
 * Custom helper functions for this theme.
 */

/**
 * Calculate the reading time for a post.
 * 
 * @return float Reading time in minutes.
 */
function reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    return ceil($word_count / 200);
}
