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

// Defer main script for better performance
function mhtwa_defer_js($tag, $handle){
    if($handle === 'mhtwa-js'){
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'mhtwa_defer_js', 10, 2);

// Force lazy loading for all images
function mhtwa_lazy_loading($attr){
    $attr['loading'] = 'lazy';
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'mhtwa_lazy_loading');

// Compress uploaded JPEG images
add_filter('jpeg_quality', function(){ return 80; });

// Basic security headers
function mhtwa_security_headers(){
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
}
add_action('send_headers', 'mhtwa_security_headers');


