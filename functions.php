<?php
require_once get_template_directory() . '/inc/setup.php';

function mhtwa_enqueue(){
    wp_enqueue_style('mhtwa-style', get_stylesheet_uri(), [], '0.2');
    wp_enqueue_script('mhtwa-js', get_template_directory_uri() . '/assets/js/theme.js', [], '0.2', true);
    wp_localize_script('mhtwa-js', 'mhtwa', [
        'themeUri' => get_template_directory_uri()
    ]);
}
add_action('wp_enqueue_scripts', 'mhtwa_enqueue');

// PWA manifest
function mhtwa_manifest(){
    echo '<link rel="manifest" href="'.esc_url( get_template_directory_uri() . '/manifest.json' ).'">';
}
add_action('wp_head', 'mhtwa_manifest');
