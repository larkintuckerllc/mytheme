<?php
function mytheme_add_theme_scripts() {
  wp_register_style('style', get_stylesheet_uri(),
    array(), '2017111801', 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'mytheme_add_theme_scripts');
